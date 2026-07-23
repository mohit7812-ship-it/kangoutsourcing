<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $caseStudies = collect(config('case_studies'))->take(3);

        return view('home', compact('caseStudies'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }
}
