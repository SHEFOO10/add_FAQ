<?php

namespace Aquadic\AddFAQ\Traits\Scopes;

use Illuminate\Database\Eloquent\Builder;

/**
 * @method static Builder active(bool $isActive = true)
 * @method static Builder inActive()
 */
trait HasActiveScope
{
    /**
     * Scoping Model Queries to Active / Inactive Records using `is_active` attribute.
     */
    public function scopeActive(Builder $query, bool $isActive = true): Builder
    {
        return $query->where($this->qualifyColumn('is_active'), $isActive);
    }

    /**
     * Scoping Model Queries to Inactive Records using `is_active` attribute.
     */
    public function scopeInActive(Builder $query): Builder
    {
        return $this->active(isActive: false);
    }

    /**
     * Check if Model is Active
     */
    public function isActive(): bool
    {
        return (bool) $this->getAttribute('is_active');
    }
}
