<?php

namespace App\Http\Controllers\welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VipController extends Controller
{
    public function index(){
        return view("welcome.vip",['name'=> " 100$"]);
    }
}
