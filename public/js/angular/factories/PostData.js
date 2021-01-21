'use strict';

app.factory('PostFactory', function($http){
    return {
        load: function() {
            return $http.get('/posts/load').then(function (result) {
                return result;
            });
        },

        store: function(data) {
            return $http.post('/posts', data).then(function (result) {
                return result;
            });
        },

        update: function(id, data) {
            return $http.patch('/posts/' + id, data).then(function (result) {
                return result;
            });
        },

        delete: function(id) {
            return $http.delete('/posts/' + id).then(function (result) {
                return result;
            });
        }
    };
});
