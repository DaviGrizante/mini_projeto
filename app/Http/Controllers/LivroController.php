<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use Validator;

class LivroController extends Controller
{
    public function index(){
        $livros = Livro::all();
        return view('index', compact('livros'));
    }

    public function create(){
        return view('adicionar');
    }

    public function store(Request $request){
       
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|max:100',
            'autor' => 'required|string|max:50',
            'ano_publicacao' => 'required|integer',
            'resumo' => 'nullable|text',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        
        $livro = Livro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'ano_publicacao' => $request->ano_publicacao,
            'resumo' => $request->resumo,
        ]);

       
        return response()->json($livro, 201);
    }
    }
