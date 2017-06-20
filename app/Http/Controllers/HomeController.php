<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
        return view('home');
	}

	public function login(){
	    return view('auth/login');
    }

    public function loginval()
    {
        $input = Input::all();
        if (Auth::attempt(array('dni' => $input['dni'], 'password' => $input['password'] ))) {
            return redirect('/Espacios');
        } else {
            $errors = "Usuario o contraseña erroneos";
            return view('auth/login')->with('errors', $errors);
        }
    }

}