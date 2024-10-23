@extends('layouts.app')

@section('page-title', 'Laravel DC Comics')

@section('main-content')
<h1>
    Laravel DC Comics
</h1>

<table class="table">
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
