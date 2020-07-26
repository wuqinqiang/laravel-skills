<?php

namespace App\Http\QueryFilters\Post;

use App\Http\QueryFilters\Filter;
use Closure;

class Sort extends Filter
{

    protected function applyFilter($builder)
    {
        return $builder->orderBy('title', request($this->filterName()));
    }
}