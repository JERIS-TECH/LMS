<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function preview(Request $request, $course)
    {
        return view('course.preview', [
            'course' => $course,
        ]);
    }

    public function previewBN(Request $request, $course)
    {
        return view('course.preview-bn', [
            'course' => $course,
        ]);
    }
}