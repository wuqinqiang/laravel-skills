<?php

namespace App\Http\QueryFilters\Post;

use App\Http\QueryFilters\Filter;
use Closure;

class Active extends Filter
{

    protected function applyFilter($builder)
    {
        return $builder->where($this->filterName(), request($this->filterName()));
    }
}