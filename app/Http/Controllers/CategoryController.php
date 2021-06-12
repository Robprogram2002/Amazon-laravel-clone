<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use App\ProductTag;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;


class CategoryController extends Controller
{
    public function index() {

        $categories = Category::all();
        return view('layouts/admin',['action' => 'category', 'categories' => $categories] );
    }

    public function image($filename) {
        $file = Storage::disk('categories')->get($filename);
        return new Response($file,200);
    }

    public function subImage($file)
    {
        $image = Storage::disk('subcategories')->get($file);
        return new Response($image,200);
    }

    public function detail($id) 
    {
        $category = Category::findOrFail($id);

        return view('layouts/admin', ['action' => 'detail', 'category' => $category]);
    }

    public function subcategory() 
    {
        $sub_categories = SubCategory::all();
        $categories = Category::all();

        return view('layouts/admin', ['action' => 'subcategory', 'sub_categories' => $sub_categories, 'categories' => $categories]);
    }

    public function tag()
    {
        $product_tags = ProductTag::all();
        return view('layouts/admin', ['action' => 'productTag', 'product_tags' => $product_tags]);
    }
    
    public function show($id) 
    {
        $category = Category::findOrFail($id);
        return view('layouts/show-category', ['category' => $category, 'action' => 'category']); 
    }

    public function showSubcategory($category_id, $id)
    {
        $category = Category::findOrFail($category_id);
        $subcategory = SubCategory::find($id);
        return view('layouts/show-category', ['action' => 'subcategory', 'subcategory' => $subcategory, 'category' => $category]);
    }

    public function prices($category_id, $number1, $number2)
    {
        $category = Category::findOrFail($category_id);
        return view('layouts/show-category', ['action' => 'prices', 'category' => $category, 'number1' => $number1, 'number2' => $number2]);
    }
}
