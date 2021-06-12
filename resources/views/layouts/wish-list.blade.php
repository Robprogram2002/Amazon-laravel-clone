@extends('layouts/app')

@section('links_css')
    <link rel="stylesheet" href=" {{asset('css/wishListStyle.css')}} ">
@endsection

@section('content_body')
    @livewire('wish', ['user' => $user])
@endsection

