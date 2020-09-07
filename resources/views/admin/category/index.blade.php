@extends('admin.layout.wrapper')
@section('content')
<a href="" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#add" style="float: right"><i class="fa fa-plus"></i></a>
<table id="table_id" class="table-bordered table-striped">
    <thead>
        <tr class="datatable-table">
            <th class="datatable-table-no">No</th>
            <th class="datatable-table-action">Action</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($category as $item)
        <tr class="datatable-table">
            <td>1</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" data-toggle="modal" data-target="#edit{{ $item->id }}" href="#">edit</a>
                      <a class="dropdown-item" href="#">detail</a>
                      <a class="dropdown-item" href="#">hapus</a>
                    </div>
                  </div>
            </td>
            <td>{{ $item->category }}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>

<!-- Modal add -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/admin/category_add" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <input type="text" name="category" class="form-control">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
        </div>
      </div>
    </div>
</div>

@foreach ($category as $item)
    
<!-- Modal edit -->
<div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/admin/category_edit/{{ $item->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <input type="text" value="{{ $item->category }}" name="category" class="form-control">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
      </div>
    </div>
</div>
@endforeach

@endsection