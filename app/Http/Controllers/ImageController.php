<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\RequestExecutor;
use Input;
use Auth;

class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RequestExecutor $requestExecutor){
        parent::__construct();
        $this->RequestExecutor = $requestExecutor;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request){
        if($request->hasFile('image') || $request->hasFile('images')) {
            // $path = $request->image->store('image');
            // $response = ['path' =>$path];

            $file = $request->file('image');
            $path = $request->image->store('image');

            $base_url = str_replace("public", "", \URL::to('/'));

            $response = [
                'name' => $file->getClientOriginalName(),
                'path' => $base_url.'storage/app/public'.'/'.$path,//url(sprintf('storage/%s',$path)),
                'size' => $file->getClientSize(),
            ];



            return response()->json($response);
        }
    }




    public function uploadUserImage(Request $request){

          if($request->hasFile('file')) {

           // Upload path
            if(isset(Auth::user()->school) && Auth::user()->school != null){
                $destinationPath = public_path('Image/'.Auth::user()->school->id.'/Users/');
            }else{
                  $destinationPath = public_path('Image/Admin/Users/');
            }
         

           // Get file extension
           $extension = $request->file('file')->getClientOriginalExtension();

           // Valid extensions
           $validextensions = array("jpeg","jpg","png","pdf");

           // Check extension
           if(in_array(strtolower($extension), $validextensions)){

             // Rename file 
             $fileName = $request->file('file')->getClientOriginalName().time() .'.' . $extension;
             // Uploading file to given path
             $request->file('file')->move($destinationPath, $fileName); 
            }
        }
    }

     public function uploadSchoolImage(Request $request){

          if($request->hasFile('file')) {

           // Upload path
             $destinationPath = public_path('Image/School/logo');
          

           // Get file extension
           $extension = $request->file('file')->getClientOriginalExtension();

           // Valid extensions
           $validextensions = array("jpeg","jpg","png","pdf");

           // Check extension
           if(in_array(strtolower($extension), $validextensions)){

             // Rename file 
             $fileName = $request->file('file')->getClientOriginalName().time() .'.' . $extension;
             // Uploading file to given path
             $request->file('file')->move($destinationPath, $fileName); 
            }
        }
    }




     public function uploadStudentImage(Request $request){

          if($request->hasFile('file')) {

           // Upload path
           $destinationPath = public_path('Image/'.Auth::user()->school->id.'/Students/');
          
           // Get file extension
           $extension = $request->file('file')->getClientOriginalExtension();

           // Valid extensions
           $validextensions = array("jpeg","jpg","png","pdf");

           // Check extension
           if(in_array(strtolower($extension), $validextensions)){

             // Rename file 
             $fileName = $request->file('file')->getClientOriginalName().time() .'.' . $extension;
             // Uploading file to given path
             $request->file('file')->move($destinationPath, $fileName); 
            }
        }
    }





}
