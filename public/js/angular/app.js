var app = angular.module('mainApp', []).config(function($interpolateProvider, $httpProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
    // $httpProvider.defaults.headers.post['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content');
});
