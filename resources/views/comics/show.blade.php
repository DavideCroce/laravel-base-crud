@extends('main')

@section('content')
    <div class="card container" style="margin-top: 200px;">
        <div class="row align-items-center">
            <div class="col-2">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col-10">
                <h2><strong>TITLE:</strong> {{ $comic->title }}</h2>
                <p><strong>DESCRIPTION:</strong> {{ $comic->description }}</p>
                <p><strong>SALE DATE:</strong> <em>{{ $comic->sale_date }}</em></p>
                <p><strong>PRICE:</strong> $<strong>{{ $comic->price }}</strong></p>
                <p><strong>TYPE:</strong> <em>{{ $comic->type }}</em></p>
                <p><strong>SERIES: <em>{{ $comic->series }}</em></strong></p>
            </div>
        </div>
    </div>
@endsection
