<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqsController extends Controller
{

  public function mostrar() {
    return view('faqs');

  }

}
