<?php

namespace App\Http\Controllers;

use App\First;
use Illuminate\Http\Request;

class FirstController extends Controller
{

    public function showAll()
    {
        return response()->json(First::all());
    }

    public function show($id)
    {
        return response()->json(First::find($id));
    }

    public function add(Request $request)
    {
        $First = First::create($request->all());

        return response()->json($First, 201);
    }

    public function update($id, Request $request)
    {
        $First = First::findOrFail($id);
        $First->update($request->all());

        return response()->json($First, 200);
    }

    public function delete($id)
    {
        First::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
