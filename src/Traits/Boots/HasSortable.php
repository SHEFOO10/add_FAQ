<?php

namespace Aquadic\AddFAQ\Traits\Boots;

use Illuminate\Database\Eloquent\Builder;
use Spatie\EloquentSortable\SortableTrait;

/**
 * @method static Builder ordered()
 */
trait HasSortable
{
    use SortableTrait;

    /**
     * Reorder the records
     */
    public function reorder(): void
    {
        $order = 1;

        $orderColumnName = $this->determineOrderColumnName();

        foreach (self::ordered()->select([$this->getKeyName(), $orderColumnName])->get() as $model) {

            if ($model->getKey() == $this->getKey()) {
                continue;
            }

            if ((int) $this->getAttribute($orderColumnName) == $model->$orderColumnName) {
                $order++;
            }

            if ((int) $model->$orderColumnName !== $order) {
                $model->$orderColumnName = $order;
                $model->save();
            }

            $order++;
        }
    }

    public function scopeOrdered(Builder $query, string $direction = 'asc', bool $allowRandom = true): Builder
    {
        return match ($this->getSortingAlgorithm()) {
            'id' => $query->orderBy('id', $direction),
            'date asc' => $query->orderBy('created_at', 'asc'),
            'date desc' => $query->orderBy('created_at', 'desc'),
            'random' => $allowRandom ? $query->inRandomOrder() : $query ,
            default => $query->orderBy($this->determineOrderColumnName(), $direction),
        };
    }

    /**
     * Determines the sorting should be used using SortSettings.
     */
    protected function getSortingAlgorithm(): string
    {
//        $settings = new SortSettings;
//        $class = Str::snake(class_basename($this));
//        if (property_exists($settings, $class) && filled($settings->{$class})) {
//            return $settings->{$class};
//        }

        return 'ordered';
    }
}
