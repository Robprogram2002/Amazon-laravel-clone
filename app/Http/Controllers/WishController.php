<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index($user)
    {
        return view('layouts/wish-list', ['user' => $user]);
    }
}
