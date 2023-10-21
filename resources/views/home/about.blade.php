@extends('layouts.home',["title" => "A propos"])

@section('content')
    
    @include('partials.home_partials._about_page', ["title" => "A propos"])
    @include('partials.home_partials._about')
    @include('partials.home_partials._competence')

@endsection