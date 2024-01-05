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

    public function leadership()
    {
        return view('frontend.team-member');
    }

    public function privacy_policy()
    {
        return view('frontend.privacy-policy');
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


}
