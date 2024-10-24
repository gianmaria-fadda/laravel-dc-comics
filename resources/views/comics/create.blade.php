@extends('layouts.app')

@section('page-title', 'Laravel DC Comics')

@section('main-content')
<h1>
    Crea Comics
</h1>

@if ($errors->any())
    <div class="alert alert-danger my-4">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif

<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required maxlength="128" placeholder="Inserisci qui il titolo...">
        @error('title')
          <div class="alert alert-danger mt-1">
            Errore Titolo: {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" maxlength="2048" placeholder="Inserisci qui la copertina...">
        @error('thumb')
          <div class="alert alert-danger mt-1">
            Errore Img: {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required max="999.99" step="0.01" placeholder="Inserisci qui il prezzo...">
        @error('price')
          <div class="alert alert-danger mt-1">
            Errore Prezzo: {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" required maxlength="64" placeholder="Inserisci qui la serie...">
        @error('series')
          <div class="alert alert-danger mt-1">
            Errore Serie: {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data Vendita</label>
        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci qui la data di vendita...">
        @error('sale_date')
          <div class="alert alert-danger mt-1">
            Errore Data della Vendita: {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
        <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
            <option select disabled>Seleziona un tipo...</option>
            <option value="comic book">Fumetto</option>
            <option value="graphic novel">Graphic Novel</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <textarea class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" aria-describedby="artist-helper" placeholder="Inserisci gli Artisti..."></textarea>
        @error('artists')
          <div class="alert alert-danger mt-1">
            Errore Artisti: {{ $message }}
          </div>
        @enderror
        <div id="artist-helper" class="form-text">
            Inserisci i Nomi degli Artisti separati da una virgola
          </div>
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <textarea class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" aria-describedby="writers-helper" placeholder="Inserisci gli Scrittori..."></textarea>
        @error('writers')
          <div class="alert alert-danger mt-1">
            Errore Scrittori: {{ $message }}
          </div>
        @enderror
        <div id="writers-helper" class="form-text">
            Inserisci i Nomi degli Scrittori separati da una virgola
          </div>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required maxlength="4096" placeholder="Inserisci la Descrizione..."></textarea>
        @error('description')
          <div class="alert alert-danger mt-1">
            Errore Descrizione: {{ $message }}
          </div>
        @enderror
      </div>

      <div>
        <button type="submit" class="btn btn-success w-100">
            Aggiungi +
        </button>
      </div>
@endsection
