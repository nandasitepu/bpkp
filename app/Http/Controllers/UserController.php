<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    
    // USER
    public function dashboard() 
      {
        return view ('users.dashboard');
      }
    
    public function profil($id) 
      {
        $user = User::find($id); 
        return view ('users.profil')->with('user', $user);
      }


    // ADMIN
    public function index() 
      {
        return view ('users.index');
      }

    public function create() 
      {
        return view ('users.new');
      }
}
