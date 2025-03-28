<?php

namespace RecentlyViewed\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait CanBeViewed
 * @package RecentlyViewed\Models\Traits
 *
 */
trait CanBeViewed
{

    /**
     * @param  array  $values
     *
     * @return null|Builder
     */
    public function whereRecentlyViewedIn(array $values): ?Builder
    {
        $values = array_filter($values, fn ($v) => (is_int($v) || is_string($v)));

        if (count($values)) {
            return static::whereIn($this->getKeyName(), $values);
        }

        return null;
    }

    /**
     * Get recently viewed items count.
     *
     * @return int
     */
    public function getRecentlyViewsLimit(): int
    {
        return (int) (property_exists($this, 'recentlyViewsLimit') ? $this->recentlyViewsLimit : 10);
    }
}
