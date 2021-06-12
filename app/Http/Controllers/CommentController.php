<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function image($filename)
    {
        $file = Storage::disk('comments')->get($filename);
        return new Response($file,200);
    }
}
