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
            $data =[
            'is_edit' => false,
            'title' => 'Add School',
            'route' => route('schools.store'),
            'button' => 'Submit',
        ];

        return view('panal.schools.form')->with(['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        if(isset($request->images) && $request->images != null){
        $add_school->logo = $request->images[0]['path'];
}
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

     
        return response()->json( ['IsValid' => true, 'Message'=>'School has been added successfully']);
        
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
         $logo = [];
            $school = School::find($id);
            array_push($logo, ['name' => $school->name, 'url' => $school->logo, 'size' => 0]);
       $data =[
            'is_edit' => true,
            'title' => 'Edit School',
            'route' => route('schools.update',$school->id),
            'button' => 'Update',
            'school' => $school,
            'logo' => $logo,
        ];

        return view('panal.schools.form')->with(['data' => $data]);

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
      
        $update_school =  School::find($id);
        $update_school->name = $request->name;
if(isset($request->images) && $request->images != null){
        $update_school->logo = $request->images[0]['path'];
}

        $update_school->email = $request->email;
        $update_school->short_name = getStringCode($request->name);
        $update_school->owner_name = $request->owner_name;
        $update_school->address = $request->address;
        $update_school->owner_cnic_number = $request->cnic;
        if($request->active){
               $update_school->is_active = 1;
        }
        if($request->verified){
        $update_school->is_verified = 1;
        }
        $update_school->save();
        
        return response()->json( ['IsValid' => true, 'Message'=>'School has been Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
              $school = School::find($request->id);
       $res = $school->delete();

         if($res){
             return response()->json( ['IsValid' => true, 'Message'=>'School has been deleted successfully']);
         }
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
