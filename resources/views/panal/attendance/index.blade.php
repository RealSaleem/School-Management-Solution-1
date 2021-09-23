@extends('panal.layouts.app') @section('content')
<style type="text/css">
   .btn-gray{
   padding: 3px 18px;
   background-color: darkgray;
   color: white;
   }
   .btn-seagreen{
   padding: 3px 18px;
   background-color:  darkseagreen;
   color: white;
   }
   .badge-theme{
   padding: 8px 13px 9px 12px !important;
   border-radius: 36% 35% 35% 35% !important;
   font-size: 10px!important;
   }
   .status{
   padding: 10px 20px;
   }
</style>
<div class="container">
   <div class="row ">
      <div class="col-12 ">
         <div class="card card-secondary" style="padding: 14px;">
            <form action="{{route('get.attendance')}}" method="post">
               @csrf
            <div class="row">
               <div class="col-md-3">
                  <input type="text" name="student_name" placeholder="Student Name" id="student_name" class="form-control">
               </div>
               <div class="col-md-3">
                  <select name="class" class="form-control" id="class">
                     <option value="">Select Class</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                  </select>
               </div>
               <div class="col-md-3">
                  <select name="shift" class="form-control " id="shift">
                     <option value="">Select Shift</option>
                     <option value="1">Morning</option>
                     <option value="2">Evening</option>
                  </select>
               </div>
               <div class="col-md-3">
                  <button type="submit"  id="get-attendance" class="btn btn-outline-dark col-md-12">Search</button>
               </div>
            </div>
            </form>
         </div>
      </div>
   </div>
   <div class="row purchace-popup mt-2">
      <div class="col-12 stretch-card grid-margin">
         <div class="card card-secondary" style="padding: 14px;">
               <div class="row">
               <div class="col-md-2" style="padding-top: 7px;">
                  <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkall">
                        <label for="checkall"> Select All
                        </label>
                      </div>
               </div>
                   <div class="col-md-2">
                  <select name="attendance" id="attendance" onchange="markLeave()" class="form-control form-control-sm">
                     <option>Select Attendance</option>        
                     <option value="1">Present</option>
                     <option value="0">Absent</option>
                     <option value="2">Leave</option>
                  </select>
               </div>
               <div class="col-md-2">
                  <select name="leave_type" id="leave_type" class="form-control form-control-sm d-none">
                     <option>Select Leave Type</option>        
                     <option value="1">Present</option>
                     <option value="0">Absent</option>
                     <option value="2">Leave</option>
                  </select>
               </div>
                   <div class="col-md-3">
                  <input type="text" name="detail" id="detail" class="form-control form-control-sm d-none">
               </div>
                   <div class="col-md-3 text-right">
                     <button type="button"  class="btn btn-outline-info btn-sm ">Mark</button>
                   </div>

            </div>
            <hr>
            <div class="row">
               <div class="col-md-12">
                  <table class="table table-striped table-bordered" id="attendance_table">
                     <thead>
                        <tr>
                           <th width="5%">
                              
                           </th>
                           <th width="30%">Student Name</th>
                           <th width="10%">Class</th>
                           <th width="10%">Reg#</th>
                           <th width="10%">Leave</th>
                           <th width="10%">Present</th>
                           <th width="10%">Absent</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(isset($attendance) &&  count($attendance) > 0)
                       @foreach($attendance as $at)
                       <tr>
                          <td>
                                  <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkall-{{$at->id}}" class="attendance_row">
                        <label for="checkall-{{$at->id}}">
                        </label>
                      </div>

                          </td>
                          <td>{{$at->student->name}}</td>
                          <td>{{$at->student->class}}</td>
                          <td>{{$at->student->reg_number}}</td>
                          <td>
                           <div class="icheck-primary d-inline">
                        <input type="radio" id="leave" name="r1" checked="">
                        <label for="leave">
                        </label>
                      </div>
                             
                          </td>
                          <td>
                                  <div class="icheck-success d-inline">
                        <input type="radio" id="present" name="r1" checked="">
                        <label for="present">
                        
                        </td>
                          <td>
                                  <div class="icheck-danger d-inline">
                        <input type="radio" id="absent" name="r1" checked="">
                        <label for="absent">
                        </td>
                       </tr>
                       @endforeach
                       @endif
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection @section('script')
   <script type="text/javascript">


      $(function () {
    $('#checkall').change(function () {
        if ($(this).is(':checked')) {
            $('.attendance_row').prop('checked', true).trigger('change');
        } else {
            $('.attendance_row').prop('checked', false).trigger('change');
        }
    });
});




      $(document).ready(function () {
     $('#attendance_table').DataTable();


      });
     

      
      
          function markLeave(){
         let value =$('#attendance').val();
         if(value == 2){
            $('#leave_type').removeClass('d-none');
            $('#detail').removeClass('d-none');
         }else{
            $('#leave_type').addClass('d-none');
            $('#detail').addClass('d-none');
         }
      }
      
      
      
      
          
   </script>
<!--    <script type="text/javascript">
      $('.advance_fee').hide();
        $("#addvance_fee_check").change(function () {
      $(".advance_fee").toggle();
      });
   </script> -->
   @endsection
</div>