<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceModel;
use App\ViewModels\Attendance\GetAttendanceModel;
use App\Core\RequestExecutor;
use Auth;
class AttendanceController extends Controller
{


    public function index()
    {
        $attendance =[];
        return view('panal.attendance.index')->with(compact('attendance'));
    }

    public function getAttendance(Request $request)
    {
             $student_name = $request->student_name;
             $class = $request->class;
             $shift = $request->shift;
        $attendance = AttendanceModel::whereHas('student',function ($q) use ($class) {
                $q->where(['class'=>$class]);
             })->where('school_id',Auth::user()->school->id)->get();

         return view('panal.attendance.index')->with(compact('attendance'));
    }
  
}
