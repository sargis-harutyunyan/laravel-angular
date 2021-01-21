<div class="modal fade" tabindex="-1" role="dialog" id="add-post">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" ng-if="errors.length > 0">
                    <ul>
                        <li ng-repeat="error in errors">[[ error ]]</li>
                    </ul>
                </div>

                <div class="form-group">
                    <label for="name-inp">Name</label>
                    <input id="name-inp" type="text" name="name" class="form-control" ng-model="post.name">
                </div>
                <div class="form-group">
                    <label for="description-inp">Description</label>
                    <textarea id="description-inp" name="description" rows="5" class="form-control" ng-model="post.description"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" ng-click="store()">Submit</button>
            </div>
        </div>
    </div>
</div>
