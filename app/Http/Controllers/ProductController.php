<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Product;
use App\Category;
use App\Subcategory;

class ProductController extends Controller
{
    public function create()
    {
        return view('layouts/admin', ['action' => 'product']);
    }

    public function image($filename) 
    {
        $file = Storage::disk('products')->get($filename);
        return new Response($file, 200);
    }

    public function show($category_id, $subcategory_id, $id)
    {
        $category = Category::findOrFail($category_id);
        $subcategory = Subcategory::findOrFail($subcategory_id);
        $product = Product::findOrFail($id);

        return view('layouts/show-product', ['category' => $category, 'subcategory' => $subcategory, 'product' => $product]);
    }
}
