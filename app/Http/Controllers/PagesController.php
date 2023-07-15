<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  //Home page
  public function home()
  {
    // echo "Home";
    return view('pages/home');
  }
  // Cart

  public function cart()
  {
    // echo "Cart";
    return view('pages/cart');
  }
}
