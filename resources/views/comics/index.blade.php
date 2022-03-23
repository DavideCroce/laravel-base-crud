@extends('main')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row">
            @forelse($comics as $comic)
                <div class="col-3">
                    <div class="card" style="font-size: 13px; margin-bottom: 100px; font-weight: bold;">
                        <img src="{{ $comic->thumb }}" class="img-fluid" alt="">
                        <p>{{ $comic->title }}</p>
                        <p>{{ $comic->price }}</p>
                        <p>{{ $comic->series }}</p>
                        <p>{{ $comic->sale_sate }}</p>
                        <p>{{ $comic->type }}</p>
                        <a href="{{ route('comics.show', $comic->id) }}">View more</a>
                    </div>
                </div>
            @empty
                <h1>There are no comics</h1>
            @endforelse
            <a href="{{ route('comics.create') }}" class="btn btn-success col-3">Add a new comic</a>
        </div>
    </div>
@endsection
