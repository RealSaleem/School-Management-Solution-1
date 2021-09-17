@extends('panal.layouts.app')
@section('content')

  <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
              <div class="col-6 ">
                <h4>Edit Student</h4>
              </div>
            </div>
            <div class="row purchace-popup mt-2">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style=" padding: 24px;">

                  <form action="{{route('students.update',$student->id)}}" method="POST" >
                    {{ method_field('PUT') }}
                  @csrf
                   <div class="row mb-4">
                    <div class="col-md-4">
                      <label><b>Date: </b>{{$student->doa}} </label><br>
                      <label><b>Reg#: </b>{{$student->reg_number}} </label>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4 text-right">
                      <div class='content'>
                    <form action="{{route('fee.setting.update')}}" class='dropzone' >
                    </form> 
                  </div> 
                    </div>
                  </div>

         

                  <div class="row">
                    <div class="col-md-4">
                      <label>Student Name :</label>
                      <input type="text" name="name" value="{{$student->name}}" class="form-control">
                    </div>
                    <div class="col-md-4">
                      <label>Father/Gardian Name :</label>
                      <input type="text" name="father_name" value="{{$student->father_name}}" class="form-control">
                    </div>
                     <div class="col-md-4">
                     <label>Image :</label>
                      <input type="file" name="image" class="form-control">
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-6">
                      <label>Date of Birth :</label>
                      <input type="date" name="dob" value="{{$student->dob}}" class="form-control">
                    </div>
                     <div class="col-md-6">
                     <label>Father/Gardian CNIC# :</label>
                    <input type="number" name="cnic" value="{{$student->cnic}}" class="form-control">
                              
                    </div>
                  </div>

                    <div class="row">
                        <div class="col-md-4">
                      <label>Class :</label>
                      <select class="form-control" name="class">
                        <option {{($student->class == 1) ? "Selected" : ""}} value="1">1</option>
                        <option {{($student->class == 2) ? "Selected" : ""}} value="2">2</option>
                        <option {{($student->class == 3) ? "Selected" : ""}} value="3">3</option>
                        <option {{($student->class == 4) ? "Selected" : ""}} value="4">4</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label>Father/Gardian Mobile # :</label>
                      <input type="number" name="mobile" value="{{$student->mobile}}" class="form-control">
                    </div>
                  
                     <div class="col-md-4">
                     <label>Religion :</label>
                     <select class="form-control" name="religion">
                        <option {{($student->religion == 1) ? "Selected" : ""}} value="1">Islam</option>
                        <option {{($student->religion == 2) ? "Selected" : ""}}  value="2">Cristian</option>
                        <option {{($student->religion == 3) ? "Selected" : ""}}  value="3">Hindu</option>
                        <option {{($student->religion == 4) ? "Selected" : ""}} value="4">Sikh</option>
                      </select>
                              
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-md-12">
                      <label>Address :</label>
                      <input type="address" name="address" value="{{$student->address}}" class="form-control">
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-12">
                      <hr>
                     <div class="form-check">
                         <label class="form-check-label">
                        <input type="checkbox" {{($student->hasTC != null) ? "Checked" : ""}} name="tc" onchange="addTC()" class="form-check-input"> If Student study before in any school<i class="input-helper"></i></label>
                       </div>
                     <hr>
                    </div>
                  </div>

                  <div class="card" id="tc">
                   <table class="table table-striped table-sm">
                     <thead>
                       <tr>
                         <td> School Name</td>
                         <td> Class</td>
                          <td> Roll #</td>
                         <td> Percentage</td>
                          <td> Grade</td>
                          <td> Date of Leaving</td>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td><input type="text" class="form-control" value="{{$student->hasTC->school_name}}"  name="p_school_name"></td>
                         <td><input type="text" class="form-control" value="{{$student->hasTC->class}}"  name="p_class"></td>
                         <td><input type="text" class="form-control" value="{{$student->hasTC->roll_num}}"  name="p_roll_num"></td>
                         <td><input type="text" class="form-control" value="{{$student->hasTC->percentage}}"  name="p_percentage"></td>
                         <td><input type="text" class="form-control" value="{{$student->hasTC->grade}}"  name="p_grade"></td>
                         <td><input type="text" class="form-control" value="{{$student->hasTC->dol}}"  name="p_dol"></td>
                       </tr>
                     </tbody>
                   </table>
                  </div>

                <div class="row mt-4 ">
                  <div class="col-md-12 text-right">
                     <button type="submit" class="btn btn-primary">
                       Add Student
                     </button>
                  </div>
                </div>
                  
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection
@section('script')
<script type="text/javascript">

</script>
@include('panal.layouts.dropzone')
@endsection