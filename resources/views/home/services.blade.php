@extends('layouts.home' , ['title' => 'services'])

@section('content')
    

    @include('partials.home_partials._about_page' , ["title" => "services"])
    @include('partials.home_partials._services')

@endsection