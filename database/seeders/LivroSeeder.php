<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livro::create([ 
            'titulo' => 'O Senhor dos Anéis', 
            'autor' => 'J.R.R. Tolkien', 
            'ano_publicacao' => 1954, 
            'resumo' => 'Uma aventura épica pela Terra Média.', 
        ]);
        Livro::create([
            'titulo' => 'Orgulho e Preconceito',
            'autor' => 'Jane Austen',
            'ano_publicacao' => 1813,
            'resumo' => 'A história de Elizabeth Bennet e suas interações sociais, explorando temas de classe, amor e mal-entendidos.',
        ]);

        Livro::create([
            'titulo' => 'A Metamorfose',
            'autor' => 'Franz Kafka',
            'ano_publicacao' => 1915,
            'resumo' => 'A transformação de Gregor Samsa em um inseto, e as consequências dessa mudança para sua vida e família.',
        ]);

        Livro::create([
            'titulo' => 'O Pequeno Príncipe',
            'autor' => 'Antoine de Saint-Exupéry',
            'ano_publicacao' => 1943,
            'resumo' => 'A jornada de um jovem príncipe que viaja por planetas, explorando questões de amizade, amor e a essência da vida.',
        ]);

        Livro::create([
            'titulo' => 'O Grande Gatsby',
            'autor' => 'F. Scott Fitzgerald',
            'ano_publicacao' => 1925,
            'resumo' => 'A história de Jay Gatsby e seu amor não correspondido por Daisy Buchanan, ambientada na era do jazz nos Estados Unidos.',
        ]);
 
    }
}
