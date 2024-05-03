<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\UserDashboard;

class UserDashboardContoller extends Controller
{
    public function index()
    {
        $dashboards = Reservation::all();
        return view('dashboards', compact('dashboards'));
    }
}
