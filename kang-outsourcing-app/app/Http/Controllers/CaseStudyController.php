<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudies = config('case_studies');

        return view('portfolio.index', compact('caseStudies'));
    }

    public function show(string $slug)
    {
        $caseStudies = config('case_studies');

        if (! Arr::has($caseStudies, $slug)) {
            throw new NotFoundHttpException();
        }

        $project = $caseStudies[$slug];
        $others  = Arr::except($caseStudies, $slug);

        return view('portfolio.show', compact('project', 'slug', 'others'));
    }
}
