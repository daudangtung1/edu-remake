<div class="modal" id="editCategory-{{$post->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('post.update')}}" method="post" id="createPostForm">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Title" id="title" value="{{$post->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Content</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="content" placeholder="Content" id="content">
                            </textarea>
                        </div>
                    </div>
                    <button class="btn btn-gradient-success" id="btnAdd">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
