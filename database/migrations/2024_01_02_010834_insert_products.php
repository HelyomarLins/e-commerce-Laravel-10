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
        $cat = new \App\Models\Categoria(['categoria' => 'Brinquedos']);
        $cat->save();
        $cat = new \App\Models\Categoria(['categoria' => 'Eletro Domésticos']);
        $cat->save();

        $prod = new \App\Models\Produto(['nome'=> 'Air Pods', 'valor' => 99, 'foto' => 'images/Air Pods.png', 'descricao' => 'Fone BlueToth AirPods Branco', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome'=> 'Caixa JBL', 'valor' => 299, 'foto' => 'images/Caixa JBL.png', 'descricao' => 'Caixa de som portátil JBL 1500 WTS BlueToth', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome'=> 'Casaco Manga Longa Branco', 'valor' => 59, 'foto' => 'images/Casaco Manga Longa Branco.jpg', 'descricao' => 'Casaco de algodão com capuz e bolsos canguru branco', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome'=> 'Casaco Manga Longa Preto', 'valor' => 59, 'foto' => 'images/Casaco Manga Longa Preto.jpg', 'descricao' => 'Casaco de algodão com capuz e bolsos canguru Preto', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome'=> 'Head Phone Gamer', 'valor' => 399, 'foto' => 'images/Head Phone Gamer.png', 'descricao' => '/Head Phone Gamer alta performance anti-ruídos Preto', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome'=> 'Action Figure Homem Aranha', 'valor' => 199, 'foto' => 'images/Homem Aranha.png', 'descricao' => 'Action Figure Homem Aranha articulado brilha no escuro', 'categoria_id' => $cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome'=> 'Action Figure Homem de Ferro', 'valor' => 199, 'foto' => 'images/Homem de Ferro.png', 'descricao' => 'Action Figure Homem Aranha articulado com luz e sons de ação', 'categoria_id' => $cat->id]);
        $prod7->save();
        
        $prod8 = new \App\Models\Produto(['nome'=> 'Action Figure Thor', 'valor' => 199, 'foto' => 'images/Thor.png', 'descricao' => 'Action Figure Thor articulado brilha no escuro', 'categoria_id' => $cat->id]);
        $prod8->save();
        
        $prod9 = new \App\Models\Produto(['nome'=> 'Liquidificador', 'valor' => 49, 'foto' => 'images/liquidificador.png', 'descricao' => 'Liquidificador copo reforçado 1500ml 5 velocidades', 'categoria_id' => $cat->id]);
        $prod9->save();

        $prod10 = new \App\Models\Produto(['nome'=> 'Tênis Mizuno Jogger', 'valor' => 499, 'foto' => 'images/Mizuno Jogger.png', 'descricao' => 'Tênis Mizuno Jogger alta performance', 'categoria_id' => $cat->id]);
        $prod10->save();

        $prod11 = new \App\Models\Produto(['nome'=> 'Tênis Nike Air Jordan', 'valor' => 899, 'foto' => 'images/Nike Air Jordan.png', 'descricao' => 'Tênis Nike Air Jordan cano longo design prêmiado', 'categoria_id' => $cat->id]);
        $prod11->save();

        $prod12 = new \App\Models\Produto(['nome'=> 'Tênis Nike Walker', 'valor' => 299, 'foto' => 'images/Nike Walker.png', 'descricao' => 'Tênis Nike Walker estilo e conforto', 'categoria_id' => $cat->id]);
        $prod12->save();

        $prod13 = new \App\Models\Produto(['nome'=> 'Smart Watch', 'valor' => 299, 'foto' => 'images/Smart Watch.png', 'descricao' => 'Relógio Smart Watch Android e IOS', 'categoria_id' => $cat->id]);
        $prod13->save();

        $prod14 = new \App\Models\Produto(['nome'=> 'T-Shirt Branca', 'valor' => 29, 'foto' => 'images/T-Shirt Branca.jpg', 'descricao' => 'T-Shirt  básica algodão Branca', 'categoria_id' => $cat->id]);
        $prod14->save();

        $prod15 = new \App\Models\Produto(['nome'=> 'T-Shirt Preta', 'valor' => 29, 'foto' => 'images/T-Shirt Preta.jpg', 'descricao' => 'T-Shirt  básica algodão Preta', 'categoria_id' => $cat->id]);
        $prod15->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
