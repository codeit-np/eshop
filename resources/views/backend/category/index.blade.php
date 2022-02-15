@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/category/create">Add Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                           <thead>
                            <tr>
                                <th>SN</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                           </thead>
                           <tbody>
                            @foreach ($categories as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src="{{ asset($item->image) }}" width="32" alt=""></td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="/category/{{ $item->id }}/edit" class="badge bg-primary">Edit</a>
                                    <a href="/category/{{ $item->id }}" class="badge bg-success">Show</a>
                                </td>
                            </tr>
                        @endforeach
                           </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
