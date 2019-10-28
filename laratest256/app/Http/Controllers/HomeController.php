<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function user(){
        return view('welcome');
    }
    public function view()
    {
        $usr="Coke";
        $company ="RC Company";

        return view('index',compact(['usr','company']));
    }
    public function getInfo(){
        dd(request()->all());
    }
}
