<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginsubmit(Request $request)
    {
        $user= $request->all();

        $login = Auth::attempt([
            'email' => $user['email'],
            'password' => $user['password'],
            'role' => 'admin',
            'status' => 1
        ]);

        if($login){
            //Toastr::success('Welcome!!', 'success');
            return redirect()->route('home');
        }
        else{
            //Toastr::error('try again!', 'error');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        //Toastr::success('logout success', 'success');
        return redirect()->route('login.form');
    }

}
