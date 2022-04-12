<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'job_in', 'job_out', 'user_id'];

    public static function isStartedJob()
    {
        $data = self::where('user_id', Auth::id())->where('date', now()->format('Y-m-d'))->first();
        return isset($data);
    }

    public static function isFinishedJob()
    {
        $data = self::where('user_id', Auth::id())->where('date', now()->format('Y-m-d'))->first();
        return isset($data->job_out);
    }
}
