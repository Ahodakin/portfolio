@extends('layouts.home' , ['title' => 'contact'])

@section('content')
    

    @include('partials.home_partials._about_page' , ["title" => "Contact"])
    @include('partials.home_partials._contact')

@endsection