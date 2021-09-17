<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Auth;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->school){
             $roles = Role::where('school_id',Auth::user()->school->id)->get();
        }else{
             $roles = Role::where('school_id',null)->get();
        }
          return view('panal.role_permissions.index')->with(compact('roles'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
       return view('panal.role_permissions.form')->with(compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $role = Role::create(
            [
                'name' => $request->name,
                'school_id' => (Auth::user()->school->id != null) ? Auth::user()->school->id : null,
                'display_name' => $request->name 
            ]);
        $role->syncPermissions($request->permissions);
         return redirect()->route('role.index');
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
         $permissions = Permission::all();
        $role = Role::find($id);
         return view('panal.role_permissions.edit')->with(compact('role','permissions'));
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
        return view('panal.role_permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         return view('panal.role_permissions.index');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function permissionCreate()
     {
          return view('panal.role_permissions.permissionform');
     }


        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePermission(Request $request)
    {

        $permission = Permission::create(
            [
                'name' => $request->name,
                'display_name' => $request->name,
                'module' => $request->name,
                'type' => $request->name,

            ]);

         return redirect()->route('permission.create');
    }



}
