<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact()
	{
		$data = [
					3=>[
						"id"=>1,	
						"name"=>"John",	
						"age"=>30,	
					],
					4=>[
						"id"=>2,	
						"name"=>"Simran",	
						"age"=>31,	
					],
		];
		return view("pages.contact",["data" => $data] );
	}
	
	public function about()
	{
		return view("pages.about");
	}
	// \example-app\app\Http\Controllers\contactController.php
}

