<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    //
    public $state = [
        'job-in' => false,
        'job-out' => false,
    ];

    public function index()
    {
        $this->state['job-in'] = Attendance::isStartedJob();
        $this->state['job-out'] = Attendance::isFinishedJob();
        return view('attendances.index', ['state' => $this->state]);
    }

    public function jobIn()
    {
        $value = [
            'user_id' => Auth::id(),
            'date' => now(),
            'job_in' => now()
        ];
        Attendance::create($value);
        return redirect('/')->with('fls_msg', '【出勤】打刻しました');
    }

    public function jobOut()
    {
        $current_job = Attendance::where('user_id', Auth::id())->where('date', now()->format('Y-m-d'))->first();
        $value = [
            'job_out' => now()
        ];
        $current_job->update($value);
        return redirect('/')->with('fls_msg', '【退勤】打刻しました');
    }
}
