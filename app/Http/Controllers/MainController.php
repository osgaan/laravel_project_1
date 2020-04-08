<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    
	
	public function index(){
		
		
		return view('logins.login');
		
	}
	
	function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('/inicio');
     }
     else
     {
      return back()->with('error', 'La credenciales proporcionadas no son correctas');
     }

    }
	
	/*
	function successlogin()
    {
     return view('contenido');
    }*/
	
	function logout()
    {
     Auth::logout();
     return redirect('/');
    }
	
	
	
}
