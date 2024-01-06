@extends('layout')
@section('scriptjs')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(function()
{   //JQUERY --- ONLOAD --- Ao carregar  a página
    $("#cpf").mask("000.000.000-00")
    $("#cep").mask("00000-000")
})
</script>
@endsection

@section('conteudo')
<div class="col-12">
    <h2 class="mb-3">Cadastrar cliente</h2>
</div>

    <form action="{{ route ('cadastrar_cliente') }}" method="post" class="row">
        @csrf
        <div class="form-group col-6">
            Nome: <input type="text" name="nome"  id="nome" class="form-control"/>
        </div>

        <div class="form-group col-6">
            CPF: <input type="text" name="cpf"  id="cpf" class="form-control"/>
        </div>

        <div class="form-group col-6">
            E-mail: <input type="email" name="email"  id="email" class="form-control"/>
        </div>

        <div class="form-group col-6">
            Senha: <input type="password" name="password"  id="password" class="form-control"/>
        </div>

        <div class="form-group col-8">
            Endereço: <input type="text" name="endereco"  id="endereco" class="form-control"/>
        </div>
        <div class="form-group col-1">
            Número: <input type="text" name="numero"  id="numero" class="form-control"/>
        </div>
        <div class="form-group col-3">
            Complemento: <input type="text" name="complemento"  id="complemento" class="form-control"/>
        </div>
        <div class="form-group col-4">
            Cidade: <input type="text" name="cidade"  id="cidade" class="form-control"/>
        </div>
        <div class="form-group col-4">
            Estado: <input type="text" name="estado"  id="estado" class="form-control"/>
        </div>
        <div class="form-group col-4">
            CEP: <input type="text" name="cep"  id="cep" class="form-control"/>
        </div>
        <div>
            <input type="submit" value="Cadastar" class="btn btn-success btn-sm col-1 mt-2">
        </div>
    </form>
@endsection