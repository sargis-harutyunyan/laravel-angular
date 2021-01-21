<div class="modal fade" tabindex="-1" role="dialog" id="edit-post">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Post</h4>
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
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" ng-model="editPost.name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="5" class="form-control" ng-model="editPost.description"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" ng-click="update()">Submit</button>
            </div>
        </div>
    </div>
</div>
