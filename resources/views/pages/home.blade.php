@extends('indexpc')

@section('title')
    Home
@endsection


@section('content')


    <div class="container">
            <div class="row">

                <div class="search">
                    <input type="text" ng-model="busca" class="form-control input-sm" placeholder="Buscar Registro" />

                    <a href="/registro" class="btn btn-info" role="button" id="bt-mover">Adicionar Novo Registro</a>
                </div>
            </div>
        </div>

    <table  class="table table-bordered" id="tb" ng-controller="customersController" >





        <thead>
        <tr>
            <th>#ID</th>
            <th>Nome do Computador</th>
            <th>Software</th>
            <th>Número de Série</th>
            <th>Ações</th>

        </tr>
        </thead>


            <tbody ng-repeat="dt in datas | filter:busca">
            <tr>



            </tr>
            <td><% dt.id; %></td>
            <td><% dt.namepc; %></td>
            <td><% dt.systemname; %></td>
            <td><% dt.numberserie; %></td>




                <td>


                    <a href="/edit/<% dt.id; %>" data-toggle="tooltip" data-placement="top" title="Editar Registro!" >  <button class="btn btn-primary btn-sm fa fa-pencil " >  </button></a>
                    <a href="/delete/<% dt.id; %>" data-toggle="tooltip" data-placement="top" title="Deletar Registro!" onclick="return confirm('Deseja Excluir o registro <% dt.id; %>');"> <button class="btn btn-danger btn-sm fa fa-times ">  </button></a>

                </td>



            </tr>

        </tbody>

</table>




@endsection

<script type="text/javascript">
    function customersController($scope,$http) {
        $http.get("/carregardados")
                .success(function(datas) {$scope.datas = datas});

    }

</script>









