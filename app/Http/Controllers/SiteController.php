<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class SiteController extends Controller {
	public function signup(Request $request){
		$hello = "hello";
		return View::make("addNewProduct", compact('hello'));
	}
}