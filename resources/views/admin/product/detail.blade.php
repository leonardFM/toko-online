@extends('admin.layout.wrapper')
@section('content')
<div class="row">
    <div class="col-12 col-sm-6">
      <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
      <div class="col-12">
        <img src="{{ asset('product_image/'. $product->image) }}" class="product-image" alt="Product Image">
      </div>
    </div>
    <div class="col-12 col-sm-6">
      <h3 class="my-3">{{ $product->name_product }}</h3>
      <p>{{ $product->description }}</p>

      <hr>

      <div class="bg-gray py-2 px-3 mt-4">
        <h2 class="mb-0">
          Rp. {{ $product->price }}
        </h2>
        <h4 class="mt-0">
          <small>Ex Tax: $80.00 </small>
        </h4>
      </div>

      <div class="mt-4">
        <div class="btn btn-success btn-lg btn-flat">
          <i class="fas fa-edit fa-lg mr-2"></i> 
          Edit Product
        </div>

        <div class="btn btn-danger btn-lg btn-flat">
          <i class="fas fa-trash-alt fa-lg mr-2"></i> 
          Delete Product
        </div>
      </div>

      <div class="mt-4 product-share">
        <a href="#" class="text-gray">
          <i class="fab fa-facebook-square fa-2x"></i>
        </a>
        <a href="#" class="text-gray">
          <i class="fab fa-twitter-square fa-2x"></i>
        </a>
        <a href="#" class="text-gray">
          <i class="fab fa-whatsapp-square fa-2x"></i>
        </a>
        <a href="#" class="text-gray">
          <i class="fab fa-instagram-square fa-2x"></i>
        </a>
      </div>

    </div>
  </div>
  
</div>

@endsection