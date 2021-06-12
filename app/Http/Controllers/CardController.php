<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\CartOrder;

class CardController extends Controller
{
    public function index($user)
    {
        return view('layouts/card', ['user' => $user]);
    }


}
