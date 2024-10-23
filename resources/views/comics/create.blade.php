@extends('layouts.app')

@section('page-title', 'Laravel DC Comics')

@section('main-content')
<h1>
    Laravel DC Comics
</h1>

<form action="{{ route('comics.store') }}" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" placeholder="Inserisci qui il titolo...">
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="thumb" placeholder="Inserisci qui la copertina...">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" step="0.01" placeholder="Inserisci qui il prezzo...">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" placeholder="Inserisci qui la serie...">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data Vendita</label>
        <input type="text" class="form-control" id="sale_date" placeholder="Inserisci qui la data di vendita...">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <select class="form-select" id="type">
            <option select disabled>Seleziona un tipo...</option>
            <option value="comic book">Fumetto</option>
            <option value="graphic novel">Graphic Novel</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
</form>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo </th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Tipo</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->type }}</td>
                <td>€ {{ number_format($comic->price, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                        Vedi
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
