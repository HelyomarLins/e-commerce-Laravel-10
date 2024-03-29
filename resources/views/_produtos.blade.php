@if(isset($lista))
    <div class="row">
        @foreach($lista as $prod)
          <div class="col-3 mb-3 d-flex align-items-stretch">
            <div class="card">
                <img src="{{ asset($prod->foto) }}" height="400"  class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="catd-title">{{ $prod->nome }} - R$ {{ $prod->valor }}</h6>
                        <p>{{ $prod->descricao}}</p>
                        <a href="{{ route('adicionar_carrinho', ['idproduto' =>$prod->id]) }}" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
            </div>
           </div>
        @endforeach
    </div>
@endif