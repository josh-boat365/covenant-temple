<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about_us()
    {
        return view('frontend.about-us');
    }

    public function contact_us()
    {
        return view('frontend.contact-us');
    }

    public function team_member()
    {
        return view('frontend.team-member');
    }

    // public function about_us()
    // {
    //     return view('frontend.about-us');
    // }

    // public function about_us()
    // {
    //     return view('frontend.about-us');
    // }

    // public function about_us()
    // {
    //     return view('frontend.about-us');
    // }

    // public function about_us()
    // {
    //     return view('frontend.about-us');
    // }


}
