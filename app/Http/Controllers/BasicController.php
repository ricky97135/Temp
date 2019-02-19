<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class BasicController extends Controller
{
	public function index() {
		error_log('ricky in 22222222');
		error_log('ricky in');
		return view('index');
	}
}
