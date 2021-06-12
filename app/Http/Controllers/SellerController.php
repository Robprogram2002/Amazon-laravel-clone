<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Seller;
use App\Category;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::all();
        return view('layouts/admin', ['action' => 'seller', 'sellers' => $sellers]);
    }

    public function image($filename)
    {
        $file = Storage::disk('sellers')->get($filename);
        return new Response($file,200);
    }

    public function detail($id)
    {
        $seller = Seller::findOrFail($id);
        return view('layouts/admin', ['action' => 'seller_details', 'seller' => $seller]);
    }

    public function products($category_id, $id)
    {
        $category = Category::findOrFail($category_id);
        $seller = Seller::findOrFail($id);

        return view('layouts/show-category', ['action' => 'seller', 'category' => $category, 'seller' => $seller]);
    }
}
