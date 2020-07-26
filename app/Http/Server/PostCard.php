<?php

namespace App\Http\Server;

class PostCard
{
    private $city;
    private $title;

    public function __construct($city, $title)
    {
        $this->city = $city;
        $this->title = $title;
    }


    public function hello($str1,$str2)
    {
        dd($this->city . ' '.$this->title.$str1.$str2);
    }
}