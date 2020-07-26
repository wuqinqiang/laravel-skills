<?php

namespace App\Http\QueryFilters\Post;

use App\Http\QueryFilters\Filter;
use Closure;

class MaxCount extends Filter
{

    protected function applyFilter($builder)
    {
        return $builder->take(request($this->filterName()));
    }
}