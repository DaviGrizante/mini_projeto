@extends('layouts.app')

@section('title', 'Adicionar Livro')

@section('content')
    <div class="add-book-container">
        <h1>Adicionar Livro</h1>
        <form action="{{ url('/livros') }}" method="POST">
            @csrf
            <div>
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div>
                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" required>
            </div>
            <div>
                <label for="ano_publicacao">Ano de Publicação:</label>
                <input type="number" id="ano_publicacao" name="ano_publicacao" required>
            </div>
            <div>
                <label for="resumo">Resumo:</label>
                <textarea id="resumo" name="resumo"></textarea>
            </div>
            <button type="submit">Adicionar Livro</button>
        </form>
    </div>
@endsection
