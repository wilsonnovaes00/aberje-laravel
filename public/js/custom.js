

var app = angular.module('todoApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

    app.controller("appController", function ($scope, $http) {
        $http.get('/carregardados').success(function (data) {
            $scope.newsList = data._embedded.news;
        });
    })



});





