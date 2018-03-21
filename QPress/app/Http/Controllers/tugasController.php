<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelCaptch\Lib\Captcha;

class tugasController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('test.test');
        return view('myView', ['captcha' => (new Captcha)->html()]);
    }
}
