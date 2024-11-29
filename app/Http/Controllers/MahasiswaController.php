<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return response()->json(Mahasiswa::all());
    }

    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->All());
        return response()->json($mahasiswa, 201);
    }

    public function show($id)
    {
        return response()->json(Mahasiswa::find($id));
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return response()->json($mahasiswa, 200);
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return response('Deleted Successfully', 200);
    }
}
