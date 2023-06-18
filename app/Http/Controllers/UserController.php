<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    public function index()
    {
        if ( Auth::user()->roles == 1){
        $users = User::paginate();
        
            return view('users.index', compact('users'));
        }
        else
            return Redirect::to('/dashboard');
        

    }

   
}