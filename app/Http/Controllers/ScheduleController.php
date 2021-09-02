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

    public function create()
    {
        // this is schedule create form
        // show create form
        // resources/views/schedules/create.blade.php
        return view('schedules.create');
    }

    public function store(Request $request)
    {
        // store all input to table 'schedules' using model Schedule
        $schedule = new Schedule();
        $schedule->title = $request->title;
        $schedule->description = $request->description;
        $schedule->user_id = auth()->user()->id;
        $schedule->save();

        // return to index
        return redirect()->route('schedule:index');
    }

    public function show(Schedule $schedule)
    {
        return view('schedules.show', compact('schedule'));
    }
}
