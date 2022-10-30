<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddtocardController extends Controller
{
    public function productadd()
    {
        return view("backend/productadd");
    }
}
