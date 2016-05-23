@extends('indexpc')

@section('title')
    Home
@endsection

@section('content')


        <div class="container">
            <div class="row">

                <div class="search">
                    <input type="text" class="form-control input-sm" placeholder="Buscar Registro" />

                    <a href="/registro" class="btn btn-info" role="button" id="bt-mover">Adicionar Novo Registro</a>
                </div>
            </div>
        </div>

    <table  class="table table-bordered" id="tb">

        <thead>
        <tr>
            <th>#ID</th>
            <th>Nome do Computador</th>
            <th>Sistema Operacional</th>
            <th>Número de Série</th>
            <th>Açoes</th>

        </tr>
        </thead>

        @foreach($pc as $pcs)

        <tbody>
            <tr>



                <td>{{$pcs->id}}</td>
                <td>{{$pcs->namepc}}</td>
                <td>{{$pcs->systemname}}</td>
                <td>{{$pcs->numberserie}}</td>
                <td>

                    <a href="/edit/{{$pcs->id}}" data-toggle="tooltip" data-placement="top" title="Editar Registro!" >  <button class="btn btn-primary btn-sm fa fa-pencil " >  </button></a>
                    <a href="/delete/{{$pcs->id}}" data-toggle="tooltip" data-placement="top" title="Deletar Registro!" onclick="return confirm('Deseja Excluir o registro {{"$pcs->id"}}');"> <button class="btn btn-danger btn-sm fa fa-times ">  </button></a>


                </td>



            </tr>

        </tbody>


    @endforeach

</table>

        {!! $pc->render() !!}




@endsection





