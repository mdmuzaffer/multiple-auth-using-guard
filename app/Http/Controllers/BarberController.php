<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->isMethod('post')) {
		$data = $request->all();
		
			if(Auth::guard('barber')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
				return redirect('/barber/dashboard');
			}else{
				return back()->with('message','Your Email or Password incorrect');
			}
		}
		
        return view('barber.login-barber');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('barber.barber-dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function edit(Barber $barber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barber $barber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Auth::guard('barber')->logout();
		return redirect('/barber/login')->with('error','You are logout successfully !');
    }
}
