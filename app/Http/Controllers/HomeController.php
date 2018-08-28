<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $user_id = auth()->user()->id; // Get the user_id using the auth() method
        $user = User::find($user_id); // Get the user by looking into de User model using the user_id

        $data = array(
            'posts' => $user->posts,
            'name' => $user->name
        ); 

        return view('home')->with($data); //Since we already have defined the relationship
    }
}
