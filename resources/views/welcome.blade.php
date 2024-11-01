@extends('layouts.app')

@section('title', 'Bem-vindo')

@section('content')
    <div class="welcome-container">
        <h1>Bem-vindo ao Meu Site de Livros!</h1>
        <p>Explore nossa coleção de livros e adicione os seus favoritos.</p>
        <a href="{{ url('/livros') }}" class="btn">Ver Livros</a>
    </div>
@endsection
