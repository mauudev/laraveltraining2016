<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MiControlador extends Controller
{
	public function index(){
		echo "Hola desde index<br />";
    	return view("test");
    }

    public function create(){
    	echo "Hola desde create<br />";
    	return view("test");
    }

    public function show(){
    	return "Hola desde show";
    }

    public function edit(){
    	echo "Hola desde edit<br />";
    	return view("testpost");
    }

    public function store(){
    	echo "Hola desde store";
    	return view("test");
    }

    public function destroy(){
		echo "Hola desde destroy";
		return view("test");
    }

}
