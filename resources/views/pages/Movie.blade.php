@extends('layouts.app')

@section('page_title', 'Movies')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <h2>What's new at the cinema</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 gx-4">
                @forelse ($movies as $movie)
                    <div class="col">
                        @include('partials.movieCard')
                    </div>
                @empty
                    <div>There are no new movies these week</div>
                @endforelse
            </div>
            <div class="d-flex justify-content-center py-5">
                <a href="{{ route('movies') }}" class="btn btn-primary">Complete list</a>
            </div>
        </div>
    </section>
@endsection
