@extends('indexpc')

@section('title')
    Ramais | Aberje
@endsection


@section('content')

    <div class="container">

        <div class="row col-md-10">

        </div>

        <div class="row col-md-2" >

            <div class="search">
                <a href="/ramal-criar" class="btn btn-info" role="button" id="bt-mover" style="position: relative; left: -44px;">+</a> <input type="text"  class="form-control input-sm" placeholder="Buscar Registro" />
            </div>
        </div>


    </div>

    <table  class="table table-bordered" id="tb">





        <thead>
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Ramal</th>
            <th>Host</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Aniversario</th>
            <th>Ações</th>

        </tr>
        </thead>

        <tbody>

        @foreach($host as $ht)
        <tr>



        </tr>


        <td>{{$ht->id}}</td>
        <td>{{$ht->nome}}</td>
        <td>{{$ht->ramal}}</td>
        <td>{{$ht->host}}</td>
        <td>{{$ht->telefone}}</td>
        <td>{{$ht->email}}</td>
        <td>{{$ht->aniversario}}</td>



        <td>


            <a href="/edit" data-toggle="tooltip" data-placement="top" title="Editar Registro!" >  <button class="btn btn-primary btn-sm fa fa-pencil " >  </button></a>
            <a href="/delete-ramal/{{$ht->id}}" data-toggle="tooltip" data-placement="top" title="Deletar Registro!" onclick="return confirm('Deseja Excluir o registro {{$ht->id}}');"> <button class="btn btn-danger btn-sm fa fa-times ">  </button></a>

        </td>



        </tr>



            @endforeach

        </tbody>



    </table>

    {!! $host->render() !!}








@endsection

