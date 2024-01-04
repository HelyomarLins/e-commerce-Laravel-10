@extends('layout')
@section('conteudo')
<div class="col-12">
    <h1 class="mb-3">Cadastrar cliente</h1>
</div>

    <form action="{{ route ('cadastrar_cliente') }}" method="POST" class="row">
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
            Senha: <input type="password" name="senha"  id="senha" class="form-control"/>
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
            <input type="submit" value="Cadastar" class="btn btn-success btn-sm col-2 mt-2">
        </div>
    </form>
@endsection