@extends('layouts/app')

@section('links_css')
    <link rel="stylesheet" href=" {{asset('css/adminStyle.css')}} ">   
    <link rel="stylesheet" href="{{asset('css/seller.css')}} "> 
    <link rel="stylesheet" href="{{asset('css/products.css')}} "> 
@endsection

@section('content_body')
    @switch($action)
        @case('category')
            @livewire('categories', ['categories' => $categories])
            @break
        @case('detail')
            @livewire('detail', ['category' => $category])
            @break
        @case('subcategory')
            @livewire('subcategories', ['sub_categories' => $sub_categories, 'categories' => $categories])
            @break
        @case('seller')
            @livewire('sellers', ['sellers' => $sellers])
            @break
        @case('seller_details')
            @livewire('sellers-details', ['seller' => $seller])
            @break
        @case('product')
            @livewire('products')
            @break
        @case('productTag')
            @livewire('tags', ['tags' => $product_tags])
        @default
            
    @endswitch
@endsection