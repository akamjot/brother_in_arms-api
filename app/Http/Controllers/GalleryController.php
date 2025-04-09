<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        return Gallery::all();
    }

    public function show($id)
    {
        return Gallery::findOrFail($id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required|string'
        ]);

        return Gallery::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->update($request->all());

        return $gallery;
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return response()->json(['message' => 'Image removed from gallery']);
    }
}
