@extends('layouts.app')

@section('js')
    {!! Html::script('js/angular/controllers/postController.js') !!}
    {!! Html::script('js/angular/factories/PostData.js') !!}
@endsection

@section('content')
    <div class="container" ng-controller="PostController">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button class="btn btn-primary btn-xs pull-right" ng-click="create()">Create Post</button>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-bordered table-striped" ng-if="posts.length > 0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="(index, post) in posts">
                                    <td>[[ index + 1 ]]</td>
                                    <td>[[ post.name ]]</td>
                                    <td>[[ post.description ]]</td>
                                    <td>
                                        <button class="btn btn-success btn-xs" ng-click="edit(index)">Edit</button>
                                        <button class="btn btn-danger btn-xs" ng-click="delete(index)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('post.partial.create-modal')
        @include('post.partial.update-modal')
    </div>
@endsection
