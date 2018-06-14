<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonsController extends Controller
{
    public function index(){
 
    $persons = \App\Persons::all(); 
    // we select all the entries of persons table
 
    return view('list-page', compact('persons'));
    // we return index view of view/products file
 

	}

	public function show($id){

		 $person = \App\Persons::find($id);

		  return view('view-page', compact('person'));
	}
}
