<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return response()->json(Dosen::all());
    }

    public function store(Request $request)
    {
        $Dosen = Dosen::create($request->All());
        return response()->json($Dosen, 201);
    }

    public function show($id)
    {
        return response()->json(Dosen::find($id));
    }

    public function update($id, Request $request)
    {
        $Dosen = Dosen::findOrFail($id);
        $Dosen->update($request->all());
        return response()->json($Dosen, 200);
    }

    public function destroy($id)
    {
        Dosen::destroy($id);
        return response('Deleted Successfully', 200);
    }
}
