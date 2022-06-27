
@extends('layouts.template')
@section('title','lançamentos')
@section('content')
    <div class="container">
        <h1 class="text-center mt-4">LANÇAMENTOS</h1>
                
        <div class="row mt-4">
                @if(session('messageRegister'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('messageRegister')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('messageError'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('messageError')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>LANÇAMENTO</th>
                        <th>PESSOA</th>
                        <th>VALOR</th>
                        <th>DATA</th>
                        <th>DESCRIÇÃO</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                @foreach($releases as $release)
                    <?php
                        if($release->release_type === 'DESPESA'){ ?>
                            <tr style="color:red">
                                <td>{{$release->release_type}}</td>
                                <td>{{$release->person}}</td>
                                <td>{{number_format($release->amount),2,',','.'}}</td>
                                <td>{{\Carbon\Carbon::parse($release->due_date)->format('d/m/Y')}}</td>
                                <td>{{$release->description}}</td>
                                <td>
                                    <a href="{{route('editar.edit',[$release->id])}}" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="{{route('excluir.deleteAction',[$release->id])}}" class="btn btn-danger btn-sm">Excluir</a>
                                   
                                </td>
                            </tr>
                     <?php }else{ ?>
                            <tr>
                                <td>{{$release->release_type}}</td>
                                <td>{{$release->person}}</td>
                                <td>{{number_format($release->amount),2,',','.'}}</td>
                                <td>{{\Carbon\Carbon::parse($release->due_date)->format('d/m/Y')}}</td>
                                <td>{{$release->description}}</td>
                                <td>
                                    <a href="{{route('editar.edit',[$release->id])}}" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="{{route('excluir.deleteAction',[$release->id])}}" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                    <?php }
                    ?>
                @endforeach
            </table>
        </div>
    </div>
@endsection










