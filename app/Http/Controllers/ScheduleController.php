<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        // query all schedule from 'schedules' table to $schedules
        // select * from schedules - SQL Query
        $schedules = Schedule::all();

        // return to view with $schedules
        // resurces/views/schedules/index.blade.php
        return view('schedules.index', compact('schedules'));

    }
}
