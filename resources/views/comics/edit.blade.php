@extends('layouts.app')

@section('page-title', 'Modifica '.$comic->title)

@section('main-content')
<h1>
  Modifica {{ $comic->title }}
</h1>

<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required maxlength="128" value="{{ $comic->title }}" placeholder="Inserisci qui il titolo...">
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" maxlength="2048" value="{{ $comic->thumb }}" placeholder="Inserisci qui la copertina...">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="price" name="price" required max="999.99" step="0.01" value="{{ $comic->price }}" placeholder="Inserisci qui il prezzo...">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="series" name="series" required maxlength="64" value="{{ $comic->series }}" placeholder="Inserisci qui la serie...">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data Vendita</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" placeholder="Inserisci qui la data di vendita...">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
        <select class="form-select" id="type" name="type">
            <option select disabled>Seleziona un tipo...</option>
            <option value="comic book">Fumetto</option>
            <option value="graphic novel">Graphic Novel</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <textarea class="form-control" id="artists" name="artists" aria-describedby="artist-helper"  value="{{ $comic->artists }}" placeholder="Inserisci gli Artisti..."></textarea>
        <div id="artist-helper" class="form-text">
            Inserisci i Nomi degli Artisti separati da una virgola
          </div>
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <textarea class="form-control" id="writers" name="writers" aria-describedby="writers-helper" value="{{ $comic->writers }}" placeholder="Inserisci gli Scrittori..."></textarea>
        <div id="writers-helper" class="form-text">
            Inserisci i Nomi degli Scrittori separati da una virgola
          </div>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control" id="description" name="description" rows="3" required maxlength="4096" value="{{ $comic->description }}" placeholder="Inserisci la Descrizione..."></textarea>
      </div>

      <div>
        <button type="submit" class="btn btn-warning w-100">
            Aggiorna
        </button>
      </div>
@endsection
