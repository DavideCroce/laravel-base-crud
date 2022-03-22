@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            @forelse($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" alt="">
                        <p>{{ $comic->title }}</p>
                        <p>{{ $comic->price }}</p>
                        <p>{{ $comic->series }}</p>
                        <p>{{ $comic->sale_sate }}</p>
                        <p>{{ $comic->type }}</p>
                    </div>
                </div>
            @empty
                <h1>There are no comics</h1>
            @endforelse
        </div>
    </div>
@endsection
