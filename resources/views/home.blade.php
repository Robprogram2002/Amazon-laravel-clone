@extends('layouts/app')

@section('header')
    @include('includes/header')
@endsection

@section('content_body')
    @include('includes/appContent')
@endsection

@section('scripts')
    <script src="{{asset('js/appMain.js')}} "></script>
@endsection

