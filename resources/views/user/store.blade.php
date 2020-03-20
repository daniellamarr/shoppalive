@extends('layouts.user-main')
@section('content')
    <div class="content">
        <div class="container-fluid">
          <button class="btn btn-primary" data-toggle="modal" data-target="#addProduct">Add a product</button>
          <div class="row" id="store-products">
            @if (!empty($products))
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="products">
                        <img src="{{ asset('products/'.$product->image) }}" alt="Product 1" class="image">
                        <div class="middle">
                            <div class="text">
                                <h5>{{ $product->name }}</h5>
                                <button class="btn btn-info">View</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="center-align">
                <p>
                    <i class="material-icons">remove_shopping_cart</i>
                </p>
                <p>You have no products added here yet</p>
            </div>
            @endif
          </div>
        </div>
    </div>
    <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add a new product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('createProduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="">
                    @if ($errors->has('product_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('product_name') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="">
                    @if ($errors->has('category'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder=""></textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="">
                    @if ($errors->has('price'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="image">Choose an image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Add Product</button>
                </div>
            </form>
          </div>
        </div>
    </div>
@endsection