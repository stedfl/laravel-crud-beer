@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $beer->name }}</h1>
            <p>Prezzo: $ {{ number_format($beer->price, 2, ',', '.') }}</p>
            <p>Voto: {{ $beer->rating }}</p>

            <img src="{{ $beer->image }}" alt="{{ $beer->name }}">
        </div>

        <a class="btn btn-primary mt-3" href="{{ route('beers.index') }}">Home</a>
    </div>
@endsection
