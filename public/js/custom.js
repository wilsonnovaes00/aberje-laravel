var app = angular.module('todoApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');


    app.controller('customersCtrl', function($scope, $http) {
        $http.post("/carregardados.json").then(function(response) {
            $scope.myData = response.data.records;
        });
    });


});







