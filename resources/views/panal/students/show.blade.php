@extends('panal.layouts.app')
@section('content')


  <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
              <div class="col-6 ">
                <h4>Student Form</h4>
              </div>
              <div class="col-md-6 text-right">
                     <!-- <a href="{{url('students/getPDF/'.$student->id)}}" id="cmd" class="btn btn-warning"> -->
                       <a href="#" id="cmd" class="btn btn-warning">
                        Generate PDF & Print
                     </a>
                  </div>
            </div>
            
            <div class="row purchace-popup mt-2" id="content">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style=" padding: 24px;">
				<div class="row mb-4" style="height: 67px;">
				</div>
  					<div class="row mb-4">
                    <div class="col-md-4">
                      <label><b>DOA:</b> {{$student->doa}}</label><br>
                     
                    </div>
                    <div class="col-md-4 text-center">
                    	
                    	 <span>
                    	 	<!-- <img src="{{asset('assets/img/faces/face8.jpg')}}" style=" border-radius: 50%;" alt="Profile image" name="image"> -->
                    	 	<h1 style="font-family: 'Open Sans'; margin-bottom: -19px;"> {{Auth::user()->school->name}}</h1>
                    	 </span>
                    	<br>
                    	<span style="font-family: 'Open Sans';"> {{Auth::user()->school->address}}</span>
                    </div>
                    <div class="col-md-4 text-right">
                     <label><b>Reg#: </b>{{$student->reg_number}}</label>
                    </div>
                  </div>
                 
                   <div class="row mb-4">
                    <div class="col-md-4">
                    
                    </div>
                    <div class="col-md-4">
                    	
                    </div>
                    <div class="col-md-4 text-right">
                     
                    </div>
                  </div>


 <div class="row">
                    <div class="col-md-4">
                      
                    </div>
                    <div class="col-md-4">
                     
                    </div>
                     <div class="col-md-4 text-center">
                       <img src="{{asset('assets/img/faces/face8.jpg')}}" alt="Profile image" name="image" style="height: 164px;">
                     </div>
                   </div>
                    


        

                  <div class="row">
                    <div class="col-md-4">
                      <label>Student Name :</label><br>
                    <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{$student->name}}</label>
                    </div>
                    <div class="col-md-4">
                      <label>Father/Gardian Name :</label>
                        <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{$student->father_name}}</label>
                    </div>
                     <div class="col-md-4 ">
                      <label>Father/Gardian CNIC# :</label>
                      <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{$student->cnic}}</label>
                     	 
                     </div>
                    
                  </div>
                    <div class="row">
                    <div class="col-md-4">
                      <label>Date of Birth :</label>
                        <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{$student->dob}}</label>
                    </div>
                    
                     <div class="col-md-4">
                      <label>Class :</label>
                        <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{$student->class}}</label>
                    </div>
                    <div class="col-md-4">
                      <label>Father/Gardian Mobile # :</label>
                       <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{$student->mobile}}</label>
                    </div>
                  </div>

                    <div class="row">
                     <div class="col-md-3">
                     <label>Religion :</label>
                       <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{getReligion($student->religion)}}</label>
                              
                    </div>
                 
                    <div class="col-md-9">
                      <label>Address :</label>
                      <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{$student->address}}</label>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-12">
                      <hr>
                     <div class="form-check">
                         <label class="form-check-label">
                        <input type="checkbox" disabled="" class="form-check-input"  {{($student->hasTC != null) ? 'Checked' : ""}}   > If Student study before in any school<i class="input-helper"></i></label>
                       </div>
                    
                    </div>
                  </div>

                  <div class="card" >
                   <table class="table table-striped table-sm">
                     <thead>
                       <tr style="height: 49px; text-align: -webkit-center; font-weight: 900;">
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
                         <td>  <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{isset($student->hasTC) ? $student->hasTC->school_name : null}}</label></td>
                         <td>  <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{isset($student->hasTC) ? $student->hasTC->class : null}}</label></td>
                         <td>  <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{isset($student->hasTC) ? $student->hasTC->roll_num :  null}}</label></td>
                         <td>  <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{isset($student->hasTC) ? $student->hasTC->percentage : null}}</label></td>
                         <td>  <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{isset($student->hasTC) ? $student->hasTC->grade : null}}</label></td>
                         <td>  <label style="border: 2px solid black; padding: 13px 5px 10px 11px; width: 100%;">{{isset($student->hasTC) ? $student->hasTC->dol : null}}</label></td>
                       </tr>
                     </tbody>
                   </table>
                  </div>

               
                  
            
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection
@section('script')
<script type="text/javascript">

</script>

@endsection