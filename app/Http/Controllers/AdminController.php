<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Video;
use App\Models\Discount;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if($user->role_id != 3 && $user->role_id != 4){
            return Redirect::back();
        }

        $all_users = User::count();
        $all_courses = Course::count();

        return view('admin.dashboard', compact('all_users', 'all_courses'));
    }
}
