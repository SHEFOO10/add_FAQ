<?php

namespace Aquadic\AddFAQ\Traits\Boots;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

/**
 * @property-read ?string $forEverCachedKey
 * @property-read ?array $cachedKeys
 * @property-read ?int $forEverCachedTTL
 */
trait HasCache
{
    /**
     * Boot Of CompletesDataFromRelation
     */
    public static function bootHasCache(): void
    {
        static::saved(function (self $model) {
            Cache::deleteMultiple($model->getCachedKeys());
        });

        static::deleted(function (self $model) {
            Cache::deleteMultiple($model->getCachedKeys());
        });
    }

    /**
     * Get For Ever Cache Key (using class name).
     */
    public function getForEverCachedKey(): string
    {
        return $this->forEverCachedKey ?? (Str::snake(Str::pluralStudly(class_basename($this))).'-for-ever-cached-key');
    }

    public function getCachedKeys(): array
    {
        return $cachedKeys ?? [$this->getForEverCachedKey()];
    }

    /**
     * Get For Ever Cache Key (using class name).
     */
    public function getForEverCachedTTL(): string
    {
        return $this->forEverCachedTTL ?? (60 * 5);
    }
}
