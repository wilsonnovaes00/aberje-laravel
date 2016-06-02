@extends('indexpc')

@section('title')
    Teste
@endsection

@section('content')





    Busca: <input type="search" ng-model="busca">




    <div ng-controller="customersCtrl">


        <prev><% datas %></prev>


    </div>
    <table  class="table table-bordered" id="tb" >



        <thead>
        <tr>
            <th>#ID</th>
            <th>Nome do Computador</th>
            <th>Sistema Operacional</th>
            <th>Número de Série</th>
            <th>Açoes</th>

        </tr>
        </thead>

        <tbody>

        </tr>
        <td><% dt.id; %></td>
        <td><% dt.namepc; %></td>
        <td><% dt.systemname; %></td>
        <td><% dt.numberserie; %></td>
        </tr>

        </tbody>





    </table>

    </div>


@endsection








