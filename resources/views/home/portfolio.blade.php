@extends('layouts.home' , ['title' => 'portfolio'])

@section('content')


    @include('partials.home_partials._about_page' , ["title" => "portfolio"])
    @include('partials.home_partials._portfolio')
    @include('partials.home_partials._competence')
@endsection
