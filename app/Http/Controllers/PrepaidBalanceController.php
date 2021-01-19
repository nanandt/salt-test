<?php

namespace App\Http\Controllers;

use App\Topup;
use Illuminate\Http\Request;

class PrepaidBalanceController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.prepaid-balance');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Topup::create($data);
        return redirect('prepaid-balance');
    }
}
