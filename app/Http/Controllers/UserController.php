<?php

namespace App\Http\Controllers;

use App\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::latest()->get();
        
        return view('user.index',compact('user'));
    }

    public function create()
    {
        return view('obat.create');
    }
}
