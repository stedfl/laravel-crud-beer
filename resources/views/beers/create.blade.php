@extends('layout.main')

@section('content')
    <div class="container py-5">
        <h1>Creazione nuova birra</h1>
        <form action="{{ route('beers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="float" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="image">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
