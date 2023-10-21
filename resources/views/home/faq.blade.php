@extends('layouts.home' , ['title' => 'FAQ'])

@section('content')
    

    @include('partials.home_partials._about_page' , ["title" => "FAQ"])
    @include('partials.home_partials._faq')

@endsection