@extends('layout')
@section('scriptsjs')
<script>
$(function(){
    $('a[data-toggle="modal"]').on('click', function(event) {
        event.preventDefault();
    $($(this).data('target')).modal('show');
    });
});

$(function(){
    $(".infocompra").on('click', function() {
        //Ao clicar no link com class .infocompra esta função sera executada
        let id = $(this).attr("data-value")
        $.post('{{ route("compra_detalhes") }}', { idpedido : id}, (result) =>{

            //Funçãi de callback -- retorno do ajax
            $('#conteudopedido').html(result)

          });
    });
})
</script>
@endsection
@section('conteudo')
<div class="col-12">
    <h2>Minhas Compras</h2>
</div>
<div class="col-12">
    <table class="table table-bordered">
        <tr>
            <th>Data da Compra</th>
            <th>Situação</th>
            <th></th>
        </tr>
        @foreach($lista as $ped)
        <tr>
            <td>
                {{ Carbon\Carbon::parse($ped->datapedido)->format('d/m/Y H:i') }}

            </td>
            <td>
                {{ $ped->statusDesc() }}
            </td>
            <td>
                <a href="#" class="btn btn-sm btn-info infocompra" data-value="{{ $ped->id }}" data-toggle="modal" data-target="#modalcompra">
                    A
                </a>
                
            </td>
        </tr>
        @endforeach
    </table>
</div>
<!--Modal Vendas -->
<div class="modal fade" id="modalcompra">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalhes da Compra</h5>
            </div>
            <div class="modal-body">
               <div id="conteudopedido"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm  btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

@endsection
