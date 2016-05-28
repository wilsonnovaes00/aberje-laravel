var app = angular.module('todoApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

    function customersController($scope,$http) {
        $http.get("/carregardados")
            .success(function(datas) {$scope.datas = datas});

    }



});
















