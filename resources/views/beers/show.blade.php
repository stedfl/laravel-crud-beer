@extends('layout.main')

@section('content')
    <div class="container">
        <h1>{{$beer->name}}</h1>
        <p>Prezzo: $ {{number_format($beer->price,2, ',','.')}}</p>
        <p>Voto: {{$beer->rating}}</p>

        <img src="{{$beer->image}}" alt="{{$beer->name}}">

    </div>
@endsection
