<?php

namespace App\Http\Controllers\welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    function index(){
        return view("welcome/home",["name"=>"Rith"]);
    }
}
