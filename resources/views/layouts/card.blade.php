@extends('layouts/app')

@section('links_css')
    <link rel="stylesheet" href=" {{asset('css/cartStyle.css')}} ">
@endsection

@section('content_body')
    @livewire('cart', ['user' => $user])
@endsection

