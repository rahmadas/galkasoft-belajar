<?php

namespace App\Http\Controllers\Latian;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLatianRequest;
use App\Models\Latian;
use Illuminate\Http\Request;

class LatianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latian = Latian::all();
        return response()->json([
            'data' => $latian,
            'status' => 'true'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLatianRequest $request)
    {
        //
        $data = $request->validated();

        $latian = Latian::create($data);

        return response()->json([
            'data' => $latian,
            'status' => 'true'
        ])->setStatusCode(201);
    }

    function show(Latian $latian)
    { 
        // Latian::find($latian);
        return response()->json([
            'data' => $latian,
            'status' => 'true'
        ]);
    }

    function update(StoreLatianRequest $request, Latian $latian)
    {
        $data = $latian->update($request->validated());
        return response()->json([
            'data' => $data,
            'status' => 'true'
        ])->setStatusCode(202);
    }

    function destroy(Latian $latian)
    {
        $latian->delete();
        return response()->json([
            'status' => true
        ]);
    }
}
