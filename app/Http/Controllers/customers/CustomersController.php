<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function show(Customers $customers)
    {
        // Customers::find($customers);
        // $customers = Customers::all();
        return response()->json([
            'data' => $customers,
            'status' => 'true'
        ]);
    }
}
