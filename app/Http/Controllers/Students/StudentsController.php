<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\NewStudentTC;
use Auth;
use PDF;
use App\Models\Fee;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('school_id', Auth::user()->school->id)->get();
        return view('panal.students.index')->with(compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $checkReg = Student::where('school_id', Auth::user()->school->id)->first();
        if(!is_null($checkReg)){
            $regNum = Student::where('school_id', Auth::user()->school->id)->first();
            $res = preg_replace("/[^0-9]/", "", $regNum->reg_number );
            $Reg =  $res +1;
        }else{
            $Reg =  1;
        }
        $data =[
            'is_edit' => false,
            'title' => 'Add Student',
            'route' => route('students.store'),
            'button' => 'Submit',
            // 'image' => null,
            // 'student' => null,
        ];

        return view('panal.students.form')->with(['data' => $data, 'Reg' =>$Reg ]);

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
            'reg_num' => 'required',
            'father_name' => 'required',
            'dob' => 'required|date',
            'class' => 'required',
            'mobile' => 'required',
            'religion' => 'required',
        ]);
        // dd($request);
        $add_std = new Student();
        $add_std->name = $request->name;
        $add_std->reg_number = $request->reg_num;
        $add_std->father_name = $request->father_name;
        if(isset($request->image) && !is_null($request->image)){
            $add_std->image = $request->image;
        }
        $add_std->dob = $request->dob;
        $add_std->cnic = $request->cnic;
        $add_std->class = $request->class;
        $add_std->mobile = $request->mobile;
        $add_std->religion = $request->religion;
        $add_std->address = $request->address;
        $add_std->school_id = Auth::user()->school->id;
        $add_std->save();

        if(isset($request->tc) && $request->tc == 'on'){
            $getTC = new NewStudentTC();
            $getTC->student_id = $add_std->id;
            $getTC->school_name = $request->p_school_name;
            $getTC->school_id = Auth::user()->school->id;
            $getTC->class = $request->p_class;
            $getTC->roll_num = $request->p_roll_num;
            $getTC->percentage = $request->p_percentage;
            $getTC->grade = $request->p_grade;
            $getTC->dol = $request->p_dol;
            $getTC->save();
        }

        $addFee = new Fee();
        $addFee->student_id = $add_std->id;
        $addFee->status = 0;
        $addFee->school_id = Auth::user()->school->id;
        $addFee->month = date('M');
        $addFee->year = date('Y');
        $addFee->save();


        // return view('panal.students.generate_form')->with('add_std');
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);

        return view('panal.students.show')->with(compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = [];
        $student = Student::find($id);

        array_push($image, ['name' => $student->name, 'url' => $student->image, 'size' => 0]);

        $data =[
            'is_edit' => true,
            'title' => 'Edit Student',
            'route' => route('students.update',$student->id),
            'button' => 'Update',
            'image' => $image,
            'student' => $student,
        ];

        return view('panal.students.form')->with(['data' => $data]);
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
        $add_std = Student::find($id);
        // dd($add_std);reg_number
        $add_std->reg_number = $add_std->reg_number;
        $add_std->name = $request->name;
        // $add_std->reg_number = $request->reg_num;
        $add_std->father_name = $request->father_name;
        if(isset($request->images) && !is_null($request->images)){
            $add_std->image = $request->images[0]['path'];
        }
        $add_std->dob = $request->dob;
        $add_std->cnic = $request->cnic;
        $add_std->class = $request->class;
        $add_std->mobile = $request->mobile;
        $add_std->religion = $request->religion;
        $add_std->address = $request->address;
        $add_std->school_id = Auth::user()->school->id;
        $add_std->save();

        if(isset($request->tc) && $request->tc == 'on'){

            $getTC = NewStudentTC::where('student_id',$id)->first();
            $getTC->school_name = $request->p_school_name;
            $getTC->school_id = Auth::user()->school->id;
            $getTC->class = $request->p_class;
            $getTC->roll_num = $request->p_roll_num;
            $getTC->percentage = $request->p_percentage;
            $getTC->grade = $request->p_grade;
            $getTC->dol = $request->p_dol;
            $getTC->save();

        }

        return redirect()->route('students.index');
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


    public function downloadPDF($id) {

        $student = Student::find($id);
        // $pdf = PDF::loadView('panal.students.studentFormPDF', compact('student'));
        view()->share('panal.students.studentFormPDF',$student);
        $pdf = PDF::loadView('panal.students.studentFormPDF', compact('student'));

        return $pdf->download('Student.pdf');
    }
}
