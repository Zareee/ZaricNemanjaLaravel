<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function __construct(){

		$this->middleware('guest',['except' => 'destroy']);
	}


    public function create(){

    	return view('uploads.login');

    }

    public function store(){

    	if(! auth()->attempt(request(['name','password']))){

    		return back()->withErrors([
    			'message' => 'Pogresan Password ili Name!'
   			]);
    	}
    	return redirect('/');
    }


    public function destroy(){

    	auth()->logout();

    	return redirect('/');
    }

    public function getter(){
        
    }
}
