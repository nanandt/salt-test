<?php

namespace App\Http\Controllers;

use App\Topup;
use Illuminate\Http\Request;

class PrepaidBalanceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        return view('pages.prepaid-balance');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Topup::create($data);
        return redirect('product-page');
    }
}
