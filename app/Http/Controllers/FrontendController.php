<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function contact_info()
    {
        return view('frontend.contact');
    }
    public function schedule_info()
    {
        return view('frontend.schedule');
    }
    public function speakers_info()
    {
        return view('frontend.speakers');
    }
    public function about_event()
    {
        return view('frontend.about_event');
    }
    public function about_organizer()
    {
        return view('frontend.about_organizer');
    }
    public function participants_info()
    {
        return view('frontend.participants_info');
    }
}
