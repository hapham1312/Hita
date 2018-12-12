<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;

class ContactController extends Controller
{
public function index(){
    return view('Contact.contact');
    }
}
