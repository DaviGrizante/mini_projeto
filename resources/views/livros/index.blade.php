@extends('layouts.app')

@section('title', 'Lista de Livros')

@section('content')
    <h1>Lista de Livros</h1>
    <ul>
        @foreach ($livros as $livro)
            <li>{{ $livro->titulo }} - {{ $livro->autor }}</li>
        @endforeach
    </ul>
@endsection
