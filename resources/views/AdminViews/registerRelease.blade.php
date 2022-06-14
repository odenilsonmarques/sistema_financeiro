@extends('layouts.template')
@section('title','cadastro')

@section('content')
    <div class="container">
        <h1 class="text-center">CADASTRAR LANÇAMENTO</h1>
        <form action="{{route('registerRelease.registerReleaseAction')}}" method="POST">
            @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
            <div class="row mt-4">
                <div class="col-sm-6 offset-md-3">
                    <select name="release_type" id="" class="form-select" required>
                        <option value="">SELECIONE O TIPO DE LANÇAMENTO</option>
                        <option value="RECEITA">RECEITA</option>
                        <option value="DESPESA">DESPESA</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-4">
                    <input type="text" name="person" class="form-control" placeholder="INFORME A PESSOA" maxlength="30" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-4">
                    <input type="text" name="amount" class="form-control" onKeyPress="return(currencyFormat(this,'','.',event))"  placeholder="INFORME O VALOR" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-4">
                    <input type="date" name="due_date" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-4">
                    <input type="text" name="description" class="form-control" placeholder="DESCRIÇÃO" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-4">
                    <button class="btn btn-danger"><a href="#">CANCELAR </a></button>
                    <button type="submit" class="btn btn-dark">CADASTRAR</button>
                </div>
            </div>
        </form>
    </div>
@endsection






