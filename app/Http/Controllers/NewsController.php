<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return News::all();
    }

    public function show($id)
    {
        return News::findOrFail($id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date'
        ]);

        return News::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->update($request->all());

        return $news;
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return response()->json(['message' => 'News item deleted successfully']);
    }
}
