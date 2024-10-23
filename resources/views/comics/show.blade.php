@extends('layouts.app')

@section('page-title', $comic->$title)

@section('main-content')
<h1>
    {{ $comic->$title }}
</h1>

<div class="card">
    <div class="card-body"></div>
    <img src="" alt="" class="card-img-bottom">
</div>
@endsection
