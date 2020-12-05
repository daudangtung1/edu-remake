<div class="modal" id="createCategoryForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Create category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('category-blog.store')}}" method="post" id="createCategoryForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Category name" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="slug" placeholder="Category slug" id="slug">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" placeholder="Image" id="image">
                        </div>
                    </div>
                    <button class="btn btn-gradient-success" id="btnAdd">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
