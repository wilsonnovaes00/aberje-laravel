@extends('indexpc')

@section('title')
    Home
@endsection



@section('content')


    <div class="container">
        <div class="row" style="margin-top: 50px;">

            <div class="search">
                {{--<input type="text" ng-model="busca" class="form-control input-sm" placeholder="Buscar Registro" />--}}


                {!! Form::open(['method'=>'GET','url'=>'search','role'=>'search' , 'class="form-buscar" '])  !!}
            <div class="col-md-5">
                <a href="/registro" class="btn btn-info" role="button" id="bt-mover">Adicionar Novo Registro  <i class="fa fa-plus"></i></a>
            </div>

            <div class="col-md-7">
            <input type="text" class="form-control" name="search"  placeholder="Buscar Registro " style="width: 80%; display: -moz-box !important; position: relative; top: 2px;"><button class="btn btn-default-sm" type="submit" style="margin-left: 4px;">Buscar</button>
            </div>
                    {!! Form::close() !!}



                </div>
            </div>


    <table  class="table table-bordered" id="tb" data-ng-controller="customersController" >

        <thead>
        <tr>
            <th>#ID</th>
            <th>Nome do Computador</th>
            <th>Software</th>
            <th>Número de Série</th>
            <th>Ações</th>

        </tr>
        </thead>

        @foreach($data as $dt)


            <tbody ng-repeat="dt in datas | filter:busca">
            <tr>
            </tr>

            <td>{{ $dt->id }}</td>
            <td>{{ $dt->namepc }}</td>
            <td>{{ $dt->systemname }}</td>
            <td>{{ $dt->numberserie }}</td>

            <td>


            <a href="/edit/{{ $dt->id }}" data-toggle="tooltip" data-placement="top" title="Editar Registro!" >  <button class="btn btn-primary btn-sm fa fa-pencil " >  </button></a>
            <a href="/delete/{{ $dt->id }}" data-toggle="tooltip" data-placement="top" title="Deletar Registro!" onclick="return confirm('Deseja Excluir o registro {{ $dt->id }}');"> <button class="btn btn-danger btn-sm fa fa-times ">  </button></a>

            </td>

            </tr>

        </tbody>
        @endforeach
</table>


{!! $data->render() !!}




@endsection

