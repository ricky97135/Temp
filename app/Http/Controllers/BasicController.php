<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class BasicController extends Controller
{
	public function index() {
		return view('index');
	}
}