@extends('layouts/app')

@section('links_css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=" {{asset('css/new-category.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/header.css')}} ">
@endsection

@section('content_body')

    <div class="content-category">
        @livewire('products-bar', ['category' => $category] )  
        <div class="main-section">
            <div class="welcome">
                <h2>Welcome to the {{$category->title}} category</h2>
                <p>Encuentra audífonos, celulares, cámaras, accesorios para celulares, computadoras, tabletas, artículos de oficina, electrónicos de oficina, instrumentos musicales, drones, cámaras de seguridad, televisiones y mucho más</p>
            </div>
            @switch($action)
                @case('category')
                @livewire('category-index', ['category' => $category])
                    @break
                @case('subcategory')
                @livewire('subcategory-index', ['subcategory' => $subcategory])
                    @break
                @case('seller')
                @livewire('seller-products', ['category' => $category, 'seller' => $seller])
                    @break
                @case('prices')
                @livewire('products-prices', ['category' => $category, 'number1' => $number1, 'number2' => $number2])
                    @break
                @default
                
            @endswitch
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@endsection
