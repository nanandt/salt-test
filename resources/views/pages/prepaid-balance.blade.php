@extends('layouts.default')
@section('title')
    Prepaid Balance
@endsection

@section('content')
    <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item {{ request()->is('prepaid-balance') ? ' active' : '' }}"><a href="/prepaid-balance">Prepaid Balance</a></li>
            <li class="breadcrumb-item {{ request()->is('product-page') ? ' active' : '' }}"><a href="/product-page">Product Page</a></li>
        </ol>
    </nav>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Prepaid Balance</div>
                    <div class="card-body">
                        <form action="/store/" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="number" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
                                @error('mobile_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="value">Value</label>
                                <select name="value" id="value" class="form-control @error('value') is-invalid @enderror">
                                    <option>Pilih Salah Satu</option>
                                    <option value="10000">10.000</option>
							        <option value="50000">50.000</option>
							        <option value="100000">100.000</option>
                                </select>
                                @error('value')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
