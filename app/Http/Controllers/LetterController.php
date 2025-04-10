<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Letter;

class LetterController extends Controller
{
    public function index()
    {
        return response()->json(Letter::all());
    }

    public function show($id)
    {
        return response()->json(Letter::findOrFail($id));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'sender' => 'required|string',
            'date' => 'required|string',
            'description' => 'required|string'
        ]);

        return response()->json(Letter::create($request->all()));
    }

    public function update(Request $request, $id)
    {
        $letter = Letter::findOrFail($id);
        $letter->update($request->all());

        return response()->json($letter);
    }

    public function destroy($id)
    {
        $letter = Letter::findOrFail($id);
        $letter->delete();

        return response()->json(['message' => 'Letter deleted successfully']);
    }
}
