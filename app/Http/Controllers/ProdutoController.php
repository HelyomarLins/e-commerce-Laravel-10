<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Services\VendaService;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
       $data = [];

       //Buscar todos os produtos
       //Select * FROM produtos
       $listaProdutos = Produto::all();
       $data['lista'] = $listaProdutos;

       return view('home', $data);
    }

    public function categoria($idcategoria = 0)
        {
        $data = [];
        //SECLECT # FROM CATEGORIAS
        $listaCategorias = Categoria::all();

        //SECLECT # FROM PRODUTOS LIMIT 4
        $queryProduto = Produto::limit(4);

        if($idcategoria != 0 )
        {
            // WHERE categoria_id = $idcategoria
            $queryProduto->where('categoria_id', $idcategoria);
        }
        $listaProdutos = $queryProduto->get();

        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        $data['idcategoria'] = $idcategoria;
        return view('categoria', $data);
    }

    public function adicionarCarrinho($idProduto = 0, Request $request)
    {
        //Buscar o produto pelo ID
        $prod = Produto::find($idProduto);

        if($prod)
        {
            //Encontrou um produto
            // Buscar da sessão o carrinho atual
            $carrinho = session('cart', []);

            array_push($carrinho, $prod);

            session([ 'cart' => $carrinho ]);

        }
        return redirect()->route('home');
    }

    public function verCarrinho(Request $request)
        {
            $carrinho = session( 'cart', []);
            $data = ['cart' => $carrinho ];

            return view('carrinho', $data);
        }

        public function excluirCarrinho($indice, Request $request)
        {
            $carrinho = session('cart', []);
            if(isset($carrinho[$indice]))
            {
                unset($carrinho[$indice]);
            }
            session(['cart' => $carrinho]);
            return redirect()->route('ver_carrinho');
        }

        public function finalizar(Request $request)
        {
           $prods = session('cart', [])
           $vendaService = new vendaService();
            $vendaService->finalizarVenda();
           
            return redirect()->route('ver_carrinho');
        }

}

