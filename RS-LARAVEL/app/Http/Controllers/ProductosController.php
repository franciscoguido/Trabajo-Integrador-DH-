<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    
	public function mostrar () {
		return view('productos');

	}
}
