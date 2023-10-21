@extends("layouts.home",["title" => "Accueil"])

@section('content')
    @include('partials.home_partials._carousel')
    @include('partials.home_partials._about')
    @include('partials.home_partials._services')
    @include('partials.home_partials._portfolio')
    @include('partials.home_partials._clients')
    
@endsection

