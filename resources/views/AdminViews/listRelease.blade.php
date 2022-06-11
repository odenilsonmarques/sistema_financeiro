
@extends('layouts.template')
@section('title','lançamentos')
@section('content')
    <div class="container">
        <h1 class="text-center">LANÇAMENTOS</h1>
        <div class="row mt-4">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>LANÇAMENTO</th>
                        <th>PESSOA</th>
                        <th>VALOR</th>
                        <th>DESCRIÇÃO</th>
                    </tr>
                </thead>
                @foreach($releases as $release)
                    <tr>
                        <td>{{$release->release_type}}</td>
                        <td>{{$release->person}}</td>
                        <td>{{number_format($release->amount),2,',','.'}}</td>
                        <!-- <td>{{$release->due_date}}</td> -->

                        <td>{{\Carbon\Carbon::parse($release->due_date)->format('d/m/Y')}}</td>

                        

                        
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection










