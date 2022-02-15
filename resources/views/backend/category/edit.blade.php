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
                    <form action="/category/{{ $category->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Category Name <span class="text-danger">*</span></label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image (Optional)</label>
                        <input id="image" class="form-control-file" type="file" name="image" accept="image/*">
                    </div>
                    <div class="my-2">
                        <img src="{{ asset($category->image) }}" width="120" alt="">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
