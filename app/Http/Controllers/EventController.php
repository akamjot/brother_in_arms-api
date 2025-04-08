<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function show($id)
    {
        return Event::findOrFail($id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'ticket' => 'nullable|string',
            'offer' => 'nullable|string',
            'date' => 'nullable|date',
            'location' => 'nullable|string',
            'time' => 'nullable|string',
            'poster' => 'nullable|string',
            'updates' => 'nullable|string',
            'video' => 'nullable|string',
            'about_event' => 'nullable|string',
            'note' => 'nullable|string',
            'about_event_more' => 'nullable|string',
        ]);

        return Event::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());

        return $event;
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }
}

