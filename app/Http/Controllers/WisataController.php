<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function showAll()
    {
        return response()->json(Wisata::all());
    }

    public function showOne($id)
    {
        return response()->json(Wisata::findOrFail($id));
    }

    public function create(Request $request)
    {
        $wisata = Wisata::create($request->all());
        return response()->json($wisata, 201);
    }

    public function update($id, Request $request)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->update($request->all());

        return response()->json($wisata, 200);
    }

    public function delete($id)
    {
        Wisata::findOrFail($id)->delete();
        return response()->json('Deleted Successfully', 200);
    }
}
