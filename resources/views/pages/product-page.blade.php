@extends('layouts.default')
@section('title')
    Product Page
@endsection

@section('content')
    <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item {{ request()->is('prepaid-balance') ? ' active' : '' }}">
                <a href="/prepaid-balance">Prepaid Balance</a>
            </li>
            <li class="breadcrumb-item {{ request()->is('product-page') ? ' active' : '' }}">
                <a href="/product-page">Product Balance</a>
            </li>
        </ol>
    </nav>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Product Balance</div>
                    <div class="card-body">
                        <form action="/store/" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="product">Product</label>
                                <textarea name="product" rows="5" class="d-block w-100 form-control">{{ old('product') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="shipping_address">Shipping Adress</label>
                                <textarea name="shipping_address" rows="5" class="d-block w-100 form-control">{{ old('shipping_address') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
