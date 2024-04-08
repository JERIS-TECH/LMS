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

    public function checkout(Request $request, $course)
    {
        return view('course.checkout', [
            'course' => $course,
        ]);
    }

    public function checkoutBN(Request $request, $course)
    {
        return view('course.checkout-bn', [
            'course' => $course,
        ]);
    }

    public function mycourses(Request $request)
    {
        return view('course.mycourses');
    }

    public function mycoursesBN(Request $request)
    {
        return view('course.mycourses-bn');
    }

    public function favcourses(Request $request)
    {
        return view('course.favcourses');
    }

    public function favcoursesBN(Request $request)
    {
        return view('course.favcourses-bn');
    }
}
