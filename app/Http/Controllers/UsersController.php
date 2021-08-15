<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
use Auth;

class UsersController extends Controller
{
     public function index(Request $request)
    {
        if($request->isMethod('post')) {
		$data = $request->all();
		
		/* echo"<pre>";
		print_r($data);
		die; */
			if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
				return redirect('/user/dashboard');
			}else{
				return back()->with('message','Your Email or Password incorrect');
			}
		}
		
        return view('auth.login');
    }
	
	public function destroy()
    {
        Auth::logout();
		return redirect('/')->with('error','You are logout successfully !');
    }
	
	public function show(){
		return view('barber.user-dashboard');
	}
}
