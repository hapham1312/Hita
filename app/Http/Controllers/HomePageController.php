<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;

class HomePageController extends Controller
{
public function index(){
    return view('HomePage.index');
    }
}
