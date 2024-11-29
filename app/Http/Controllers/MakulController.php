<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        return response()->json(Makul::all());
    }

    public function store(Request $request)
    {
        $Makul = Makul::create($request->All());
        return response()->json($Makul, 201);
    }

    public function show($id)
    {
        return response()->json(Makul::find($id));
    }

    public function update($id, Request $request)
    {
        $Makul = Makul::findOrFail($id);
        $Makul->update($request->all());
        return response()->json($Makul, 200);
    }

    public function destroy($id)
    {
        Makul::destroy($id);
        return response('Deleted Successfully', 200);
    }
}
