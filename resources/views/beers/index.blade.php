@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row py-3">
            <h1>Lista Birre</h1>
            <div class="col py-5">
                <a class="btn btn-info" href="{{route('beers.create')}}">Crea birra</a>
                <table class="table ">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Azioni</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($beers as $beer)
                            <tr>
                                <th scope="row">{{$beer->id}}</th>
                                <td>{{$beer->name}}</td>
                                <td>&euro; {{number_format($beer->price,2, ',','.')}}</td>
                                <td>
                                    <a href="{{route('beers.show', $beer)}}"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                {{ $beers->links() }}

            </div>
        </div>
    </div>
@endsection
