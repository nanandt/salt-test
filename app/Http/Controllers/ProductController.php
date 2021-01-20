<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.product-page');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Product::create($data);
        return redirect('product-page');
    }
}
