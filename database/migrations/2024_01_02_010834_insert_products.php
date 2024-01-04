<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cat->save();

        $cat = new \App\Models\Categoria(['categoria' => 'Informática']);
        $cat->save();

        $cat = new \App\Models\Categoria(['categoria' => 'Eletrônicos']);
        $cat->save();

        $prod = new \App\Models\Produto(['nome'=> 'Bota Militar', 'valor' => 129, 'foto' => 'images/Bota Militar.jpg', 'descricao' => 'Bota cano longo estilo militar', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome'=> 'Casaco RedGreen', 'valor' => 79, 'foto' => 'images/Casaco RedGreen.jpg', 'descricao' => 'Casaco de frio com capuz e manga longa', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome'=> 'T-Shirt Blak', 'valor' => 29, 'foto' => 'images/T-Shirt Blak.jpg', 'descricao' => 'T-Shirt algodão sem estampa black', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome'=> 'T-Shirt Red', 'valor' => 39, 'foto' => 'images/T-Shirt Red.jpg', 'descricao' => 'T-Shirt algodão estampada red', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome'=> 'Tênis Esportivo', 'valor' => 299, 'foto' => 'images/Tênis Esportivo.jpg', 'descricao' => 'Tênis cano curto esportivo camuflado', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome'=> 'Sapato Boliche', 'valor' => 159, 'foto' => 'images/Sapato Boliche.png', 'descricao' => 'Sapato para boliche tradicional', 'categoria_id' => $cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome'=> 'Had Fone Gamer', 'valor' => 199, 'foto' => 'images/Had Fone Gamer.jpg', 'descricao' => 'Had Fone anatômico para gamers', 'categoria_id' => $cat->id]);
        $prod7->save();
        
        $prod8 = new \App\Models\Produto(['nome'=> 'Had Fone Infantil', 'valor' => 89, 'foto' => 'images/Had Fone Infantil.jpg', 'descricao' => 'Had Fone infantil anti alérgio colorido', 'categoria_id' => $cat->id]);
        $prod8->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
