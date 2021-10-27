<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\WpPost;

class TopPageController extends Controller{

    public function show(){

		// $posts = \App\WpPost::all();
		// $posts->dd();

		//$post = WpPost::find(1);
		//dd($post);

        return view('top', [
			
		]);
	}
	
}