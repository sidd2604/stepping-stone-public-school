@extends('layouts.layout')

@section('contentBody')
    @include('components.home.hero')

    <section id="home-events-section" class="my-5">
        <div class="container">
            <div id="home-events-container">
                @include('components.events.eventsList', ['events' => $events])
            </div>
        </div>
    </section>

    @include('components.teachers.teachersList')
@endsection