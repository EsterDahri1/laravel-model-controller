@extends('layouts.app')

@section('page-title', 'Home Page')

@section('content')

    <section>

        @include('partials.banner')

        @include('partials.movies')

    </section>

@endsection
