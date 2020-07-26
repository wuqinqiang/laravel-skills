<?php

namespace App;

use App\Http\QueryFilters\Post\Active;
use App\Http\QueryFilters\Post\MaxCount;
use App\Http\QueryFilters\Post\Sort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
    public $guarded = [];

    public static function allPost()
    {
        return app(Pipeline::class)
            ->send(self::query())
            ->through([
                Active::class,
                Sort::class,
                MaxCount::class,
            ])
            ->thenReturn()
            ->get();
    }
}
