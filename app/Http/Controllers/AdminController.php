<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
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

        return view('admin.dashboard');
    }
}
