<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Spatie\Permission\Models\Role;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = User::where('is_staff',1)->where('school_id',Auth::user()->school->id)->get();
        return view('panal.Staff.index')->with(compact('staffs'));
    }

    public function create()
    {
          $roles = Role::where('type',2)->get();

          $model =[
            'title' => 'Add Staff',
            'route' => route('user.store'),
            'button' => 'Submit',
            'is_edit' => false,
            'roles' => $roles,
            'user' => null,
          ];

         return view('panal.Staff.form')->with(compact('model'));
    }


}
