@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{ $comic->title }}
</h1>

<div class="card">
    <div class="card-body">
        <ul>
            <li>
                Serie: {{ $comic->series }}
            </li>
            <li>
                Data Vendita: {{ $comic->sale_date }}
            </li>
            <li>
                Tipo: {{ $comic->type }}
            </li>
            <li>
                Prezzo: {{ number_format($comic->price, 2, ',', '.') }}
            </li>
            <li>
                Aritsti:
                @php
                    $decodedArtists = json_decode($comic->artists, true);
                @endphp

                @if(is_array($decodedArtists))
                    <ul>
                        @foreach($decodedArtists as $artist)
                            <li>{{ $artist }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Nessun artista disponibile.</p>
                @endif

            </li>
            <li>
                Scrittori:
                <ul>
                    @php
                        $explodedWriters =explode('|', $comic->writers);
                    @endphp
                    @foreach ( $explodedWriters as $writer )
                        {{ $writer }}
                    @endforeach
                </ul>
            </li>
        </ul>

        <p>
            {{ $comic->description }}
        </p>
    </div>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-bottom">
</div>
@endsection
