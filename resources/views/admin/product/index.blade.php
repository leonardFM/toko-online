@extends('admin.layout.wrapper')
@section('content')
<a href="/admin/product_add" class="btn btn-primary btn-sm mb-2" style="float: right"><i class="fa fa-plus"></i></a>
<table id="table_id" class="table-bordered table-striped">
    <thead>
        <tr class="datatable-table">
            <th class="datatable-table-no">No</th>
            <th class="datatable-table-action">Action</th>
            <th>Image</th>
            <th>Category</th>
            <th>name product</th>
            <th>description</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($product as $item)
        <tr class="datatable-table">
            <td>1</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/admin/product_edit/{{ $item->id }}">edit</a>
                      <a class="dropdown-item" href="/admin/product_detail/{{ $item->id }}">detail</a>
                      <a class="dropdown-item" href="#">hapus</a>
                    </div>
                  </div>
            </td>
            <td>
                <img src="{{ asset('product_image/'. $item->image) }}" style="width: 50px" alt="">
            </td>
            <td>{{ $item->category->category }}</td>
            <td>{{ $item->name_product }}</td>
            <td>{{ Str::limit($item->description, '50') }}</td>
            <td>{{ $item->price }}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>

@endsection


  
  