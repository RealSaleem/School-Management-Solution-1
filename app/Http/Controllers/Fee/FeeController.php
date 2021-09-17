<?php

namespace App\Http\Controllers\Fee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Core\Response;
use App\Models\Fee;
use App\Models\FeeType;
use Auth;
use Session;
use App\Requests\Fee\GetStudentFeeRecordRequest;
use App\Core\RequestExecutor;
use App\ViewModels\Fee\GetFeeModel;
use Validator;
use Illuminate\Support\Facades\Input;

class FeeController extends Controller
{
    public function index()
    {

        return view('panal.fee.index');
    }

     public function getStudent(Request $request)
    {
         $response = GetFeeModel::load($request);
         return response()->json($response);
    }



    public function setting()
    {
        $getFeeType = FeeType::where('school_id', Auth::user()->school->id)->get();
         return view('panal.fee.setting')->with(compact('getFeeType'));
    }

    public function UpdateSetting(Request $request)
    {
        if ($request->form_type == 'fee_type') {
            $add_fee_type = new FeeType();
            $add_fee_type->fee_type = $request->name;
            $add_fee_type->school_id = Auth::user()->school->id;
            $add_fee_type->save();

            return redirect()
                ->route('fee.setting')
                ->with('success', 'Fee Type Added Successfully');
        }

        return view('panal.fee.setting');
    }

    public function submit_fee(Request $request)
    {
        $id = $request->id;
        $fee = $request->fee;
        $recived_fee = $request->recived_fee;

        $fees = Fee::where('school_id', Auth::user()->school->id)->find($id);
        $fees->status = 1;
        $fees->fee = $fee;
        $fees->recived = $recived_fee;
        $fees->recpt_no = random_int(0, 10);
        $fees->save();

        if ($fees) {
            $response = [
                'IsValid' => true,
                'Payload' => $fees,
                'Message' => 'Fee Submited Successfully',
            ];
            return response()->json($response);
        } else {
            $response = [
                'IsValid' => false,
                'Payload' => null,
                'Message' => 'Something went wrong',
            ];
            return response()->json($response);
            
        }
    }
    public function submit_advance_fee(Request $request)
    {
     $get = Student::where('school_id',Auth::user()->school->id)->find($request->std_id);
     if(!is_null($get)){

        // $request->validate([
        //     'std_id' => 'required',
        //     'feetype' => 'required',
        //     'fee' => 'required',
        //     'recived_fee'=> 'required'
        // ]);

        $rules = array(
         'std_id' => 'required',
         'feetype' => 'required',
         'fee' => 'required',
         'recived_fee'=> 'required'
        );


$validator = Validator::make(Input::all(), $rules);

if ($validator->fails())
{
     return response()->json(['IsValid'=>false, 'Message' => $validator->getMessageBag()->toArray()]);
}

        $fee = new Fee();
        $fee->recpt_no = null;
        $fee->student_id = $request->std_id;
        $fee->status = 1;
        $fee->fee_type_id = $request->feetype;
        $fee->school_id = Auth::user()->school->id;
        $fee->month = date('M');
        $fee->year =  date('Y');
        $fee->fee = $request->fee;
        $fee->recived = $request->recive_fee;
        $fee->is_advance = 1;
        $fee->total = $request->recive_fee;
        $fee->save();

        return response()->json(['IsValid'=>true, 'Message' => 'Advance fee submited successfully']);
     }else{
        return response()->json(['IsValid'=>false, 'Message' => 'Student Not Found']);
     }

    }
}
