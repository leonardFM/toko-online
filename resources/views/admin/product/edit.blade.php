@extends('admin.layout.wrapper')
@section('content')


<form action="/admin/product_edit/{{ $product->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Name Product</label>
                <input type="text" value="{{ $product->name_product }}" name="name_product" class="form-control form-control-sm" placeholder="product">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Category Product</label>
                <select class="form-control form-control-sm" name="category_id">
                      
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $product->category_id ? 'selected' : '' }} >
                            {{ $item->category }}
                        </option>
                    @endforeach
                        
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control form-control-sm" placeholder="Rp.">
                <small style="color: red">Masukan nominal dalam Rupiah **</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Image Product</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <img src="{{ asset('product_image/'. $product->image) }}" class="mt-2" width="300" height="200" alt="">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Description Product</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $product->description }}</textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection


  
  