'use strict';

app.controller("PostController", function ($scope, $http, PostFactory) {
    $scope.posts = [];
    $scope.errors = [];
    $scope.post = {
        name: '',
        description: ''
    };
    $scope.editPost = {
        id: '',
        name: '',
        description: ''
    };

    $scope.load = function () {
        PostFactory.load().then(function(result) {
            $scope.posts = result.data.posts;
        });
    };
    $scope.load();

    $scope.create = function () {
        $scope.resetForm();
        $("#add-post").modal('show');
    };

    $scope.store = function () {
        var data ={
            name: $scope.post.name,
            description: $scope.post.description
        };

        PostFactory.store(data).then(function(result) {
            $scope.resetForm();
            $scope.posts.push(result.data.post);
            $("#add-post").modal('hide');
        }, function error(error) {
            $scope.recordErrors(error);
        });

    };

    $scope.edit = function (index) {
        $scope.errors = [];
        $scope.editPost.id = $scope.posts[index].id;
        $scope.editPost.name = $scope.posts[index].name;
        $scope.editPost.description = $scope.posts[index].description;

        $("#edit-post").modal('show');
    };

    $scope.update = function () {
        var data = {
            name: $scope.editPost.name,
            description: $scope.editPost.description
        };

        PostFactory.update($scope.editPost.id, data).then(function(result) {
            $scope.errors = [];
            $scope.load();
            $("#edit-post").modal('hide');
        }, function error(error) {
            $scope.recordErrors(error);
        });
    };

    $scope.delete = function (index) {
        if (confirm("Do you really want to delete this post?")) {
            PostFactory.delete($scope.posts[index].id).then(function(result) {
                $scope.posts.splice(index, 1);
            });
        }
    };

    $scope.recordErrors = function (error) {
        $scope.errors = [];
        if (error.data.errors.name) {
            $scope.errors.push(error.data.errors.name[0]);
        }

        if (error.data.errors.description) {
            $scope.errors.push(error.data.errors.description[0]);
        }
    };

    $scope.resetForm = function () {
        $scope.post.name = '';
        $scope.post.description = '';
        $scope.errors = [];
    };
});
