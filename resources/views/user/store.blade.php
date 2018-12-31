@extends('layouts.user-main')
@section('content')
    <div class="content">
        <div class="container-fluid">
          <button class="btn btn-primary">Add a product</button>
          <div class="row" id="store-products">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="products">
                    <img src="{{ asset('img/product-img/product-1.jpg') }}" alt="Product 1" class="image">
                    <div class="middle">
                        <div class="text">
                            <button class="btn btn-info">View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="products">
                    <img src="{{ asset('img/product-img/product-2.jpg') }}" alt="Product 1" class="image">
                    <div class="middle">
                        <div class="text">
                            <button class="btn btn-info">View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="products">
                    <img src="{{ asset('img/product-img/product-3.jpg') }}" alt="Product 1" class="image">
                    <div class="middle">
                        <div class="text">
                            <button class="btn btn-info">View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="products">
                    <img src="{{ asset('img/product-img/product-4.jpg') }}" alt="Product 1" class="image">
                    <div class="middle">
                        <div class="text">
                            <button class="btn btn-info">View</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection