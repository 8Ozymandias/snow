<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function home()
     {
        return view ('welcome', [

            'foo' => 'bar'

        ]);
     }
}
