<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->type == 0){
        $users = User::where('type',0)->where('is_staff',0)->get();
        }else{
        $users = User::where('school_id',Auth::user()->school->id)->where('is_staff',0)->get();
        }
       return view('panal.user.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $roles = Role::all();

          $model =[
            'title' => 'Add User',
            'route' => route('user.store'),
            'button' => 'Add',
            'is_edit' => false,
            'roles' => $roles,
            'user' => null,
          ];

         return view('panal.user.form')->with(compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        
        $user = new User();
        $user->name =$request->name;
        $user->type = (Auth::user()->type == 0) ? 0 : 1;
        $user->school_id = (Auth::user()->type != 0)? Auth::user()->school->id : NULL;
        $user->email = $request->email;
        $user->verified = 0;
        $user->active =1;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->assignRole($request->role);




         return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);
              $model =[
            'title' => 'Update User',
            'route' => route('user.update',$user->id),
            'button' => 'Update',
            'is_edit' => true,
            'roles' => $roles,
            'user' => $user,
          ];
        return view('panal.user.form')->with(compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name =$request->name;
        $user->type = (Auth::user()->type != 0)? 0 : 1;
        $user->school_id = (Auth::user()->type != 0)? Auth::user()->school->id : NULL;
        $user->email = $request->email;
        $user->verified = 0;
        $user->active =0;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole($request->role);

         return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
         return view('panal.user.index');
    }
}
