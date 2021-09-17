<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
// use App\Core\Response;
use http\Client\Response;
use Hash;
use App\Models\User;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('panal.schools.index')->with(compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panal.schools.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'owner_name' => 'required|string',
            'address' => 'required|string',
            'cnic' => 'required|number',
        ]);
        $schooluser = new User();
        $schooluser->name = $request->name;
        $schooluser->email = $request->email;
        $schooluser->password = Hash::make('123456789');
        $schooluser->active = 0;
        $schooluser->verified = 0;
        $schooluser->type = 1;
        $schooluser->save();


        $add_school = new School();
        $add_school->name = $request->name;
        $add_school->user_id = $schooluser->id;
        $add_school->email = $request->email;
        $add_school->short_name = getStringCode($request->name);
        $add_school->owner_name = $request->owner_name;
        $add_school->address = $request->address;
        $add_school->owner_cnic_number = $request->cnic;
        if($request->active){
               $add_school->is_active = 1;
        }
        if($request->verified){
        $add_school->is_verified = 1;
        }
        $add_school->save();

     


        return redirect()->route('schools.index')->with('success','School has been added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $schools = School::find($id);
        return view('panal.schools.show')->with(compact('schools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function updateStatus(Request $request)
    {
         $school = School::find($request->id);
         $school->is_active = ($school->is_active == 0)? 1 : 0;
         $school->save();

         $response = 
         [
            'IsValid' => true,
            'Payload' => $school,
            'Error' => null,
            'Message' => ['School active status has been changed'],
         ];

          return response()->json($response);
    }

    public function addClass()
    {
        
        return view('panal.schools.class_form');
    }

}
