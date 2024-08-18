<?php

namespace App\Filters;

use Filterable\Filter;
use Illuminate\Database\Eloquent\Builder;

class FlightFilter extends Filter
{
    /**
     * Registered filters to operate upon.
     *
     * @var array<string>
     */
    protected array $filters = ['destination', 'date', 'airline'];

    /**
     * Filter the query by a given attribute value.
     *
     * @param string $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function destination(int $value): Builder
    {
        return $this->builder->where('city_id', $value);
    }

    protected function date(string $value): Builder
    {
        return $this->builder->where('date', $value);
    }

    protected function airline(int $value): Builder
    {
        return $this->builder->where('airline_id', $value);
    }
}
