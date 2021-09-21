<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceModel;
use App\ViewModels\Attendance\GetAttendanceModel;
use App\Core\RequestExecutor;
class AttendanceController extends Controller
{


    public function index()
    {
        return view('panal.attendance.index');
    }

    public function getAttendance(Request $request)
    {
        $response = GetAttendanceModel::load($request);
         return response()->json($response);
    }
  
}
