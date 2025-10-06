<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Teacher;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::latest()->paginate(6);
        $teachers = Teacher::latest()->get();
        if ($request->ajax()) {
            return view('components.events.eventsList', compact('events'))->render();
        }

        return view('pages.home.home', compact('events', 'teachers'));
    }

    public function principalDesk()
    {
        $title = "Principal's Desk";
        return view('pages.pricipal.pricipalDesk', compact('title'));
    }
}
