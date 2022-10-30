<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $users = User::all();
        // dd($users->all());
        return view("backend/index",compact('users'));
    }


    public function login()
    {
        return view("backend/login");
    }
}
