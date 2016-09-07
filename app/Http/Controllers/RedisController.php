<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redis;

class RedisController extends Controller
{
    public function redistest()
    {
    	$redis = Redis::set('user1', 'testss');
    	dd($redis);
    }
}
