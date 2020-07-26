<?php

namespace App\Http\Controllers;

use App\Jobs\SendTest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SendTestController extends Controller
{
    public function send()
    {
        $job = (new SendTest())
            ->delay(Carbon::now()->addMinutes(1));
        $this->dispatch($job);
    }

}
