@extends('layout')
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
                <a href="#" class="btn btn-sm btn-info">
                    <i class="fas fa-shopping-basket"></i>
                </a>
                
            </td>
        </tr>
        
        @endforeach
    </table>
</div>
@endsection
