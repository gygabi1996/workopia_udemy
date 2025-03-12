<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    // @desc Show all users joblistings
    // @route GET /dashboard
    public function index(): View
    {
        // Get logged in user
        $user = Auth::user();

        // Get user listing
        $jobs = Job::where('user_id', $user->id)->get();

        return view('dashboard.index', compact('user', 'jobs'));
    }
}
