<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
public function index(){
    return view('Products.detail');
    }
}
