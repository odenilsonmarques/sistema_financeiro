@extends('layouts.template')
@section('title','cadastro')

@section('content')
    <div class="container">
        <h1 class="text-center mt-4">ALTERAR DADOS</h1>
        <form action="" method="POST">
            @csrf<!--csrf toquem de segurnça padrao do laravel para envio de requisao-->
            <div class="row mt-4">
                <div class="col-sm-6 offset-md-3">
                    @if(session('messageError'))
                        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                            <strong>{{session('messageError')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <label for="release_type">Tipo de Lançamento</label>
                    <!--para carregar esse campo preenchido, verifica-se se existe um pet para edicao($data) se existir e for igual ao tipo de pet selecionado é carregado o campo preenchido com valor escolhido-->
                    <select name="release_type" id="release_type" class="form-select" required >
                        <option value="">----Selecione----</option>
                        @foreach($typeReleases as $typeRelease)
                            <option value="{{$typeRelease}}" @if( isset($data) && $data -> release_type == $typeRelease) selected @endif>{{$typeRelease}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-3">
                    <label for="release_type">Pessoa</label>
                    <input type="text" name="person" value="{{$data->person}}" class="form-control"  maxlength="30" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-3">
                    <label for="release_type">Valor</label>
                    <input type="text" name="amount"  value="{{$data->amount}}" class="form-control" onKeyPress="return(currencyFormat(this,'','.',event))"  placeholder="R$" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-3">
                    <label for="release_type">Data</label>
                    <input type="date" name="due_date" value="{{$data->due_date}}" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-3">
                    <label for="release_type">Descrição</label>
                    <input type="text" name="description" value="{{$data->description}}" class="form-control"  maxlegth="30" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-md-3 mt-4">
                    <button class="btn btn-danger"><a href="#">CANCELAR </a></button>
                    <button type="submit" class="btn btn-success">CADASTRAR</button>
                </div>
            </div>
        </form>
    </div>
@endsection






