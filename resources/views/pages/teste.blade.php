@extends('indexpc')

@section('title')
    Teste
@endsection

@section('content')



    Busca: <input type="search" ng-model="busca">




    <div ng-controller="customersController">

        <pre><% datas | json %></pre>



    </div>
    <table  class="table table-bordered" id="tb" ng-controller="customersController" >



        <thead>
        <tr>
            <th>#ID</th>
            <th>Nome do Computador</th>
            <th>Sistema Operacional</th>
            <th>Número de Série</th>
            <th>Açoes</th>

        </tr>
        </thead>

        <tbody ng-repeat="dt in datas | filter:busca">



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



<script>
    function customersController($scope,$http) {
        $http.get("/carregardados")
                .success(function(datas) {$scope.datas = datas});

    }

</script>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>

