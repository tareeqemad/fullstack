<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function controllerMetod()
    {
        return response()->json([
            'msg' =>'return only json'
        ]);
    }
}
