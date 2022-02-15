@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/category">Back</a>
                </div>
                <div class="card-body">
                    <form action="/category" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name <span class="text-danger">*</span></label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image (Optional)</label>
                        <input id="image" class="form-control-file" type="file" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
