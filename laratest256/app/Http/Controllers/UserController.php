<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function home(){
    return view('welcome');
}
    public function view()
    {
        $name="CocaCola";
        $company ="RC Company";

        return view('index',compact(['name','company']));
    }
      public function getData(){
        dd(request()->all());
      }
}
