<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(6);

        return view('pages.events.index', compact('events'));
    }

    public function all()
    {
        $events = collect([
            (object)[
                'title' => 'Annual Sports Day',
                'occasion' => 'Sports Celebration',
                'description' => 'Join us for an exciting day filled with fun and games.',
                'summary' => 'A joyful day celebrating sportsmanship and teamwork.',
                'event_date' => '2025-11-12',
                'main_image' => asset('theme/images/sports.jpg'),
                'gallery_images' => [asset('theme/images/sports1.jpg'), asset('theme/images/sports2.jpg')],
                'classes_involved' => 'Class 4, Class 5, Class 6'
            ],
            (object)[
                'title' => 'Science Exhibition',
                'occasion' => 'Annual Science Fair',
                'description' => 'Students present innovative science models and projects.',
                'summary' => 'Encouraging curiosity and innovation among young minds.',
                'event_date' => '2025-12-05',
                'main_image' => asset('theme/images/science.jpg'),
                'gallery_images' => [asset('theme/images/science1.jpg'), asset('theme/images/science2.jpg')],
                'classes_involved' => 'Class 7, Class 8, Class 9'
            ],
            (object)[
                'title' => 'Art and Craft Exhibition',
                'occasion' => 'Cultural Showcase',
                'description' => 'An event displaying creative artworks from our talented students.',
                'summary' => 'Promoting creativity and artistic expression.',
                'event_date' => '2025-12-20',
                'main_image' => asset('theme/images/art.jpg'),
                'gallery_images' => [asset('theme/images/art1.jpg'), asset('theme/images/art2.jpg')],
                'classes_involved' => 'All Classes'
            ],
        ]);

        // Paginate manually for now (later from DB)
        $paginatedEvents = new \Illuminate\Pagination\LengthAwarePaginator(
            $events->forPage(request()->get('page', 1), 6),
            $events->count(),
            6,
            request()->get('page', 1),
            ['path' => url()->current()]
        );

        return view('pages.events.all', ['events' => $paginatedEvents]);
    }
}
