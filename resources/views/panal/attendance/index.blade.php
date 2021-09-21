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
   <div class="row purchace-popup mt-2">
      <div class="col-12 stretch-card grid-margin">
         <div class="card card-secondary" style="padding: 24px;">
            <div class="row">
               <div class="col-md-3">
                  <label>Student Name : </label>
                  <input type="text" name="student_name" id="student_name" class="form-control">
               </div>
               <div class="col-md-3">
                  <label>Class : </label>
                  <select name="class" class="form-control" id="class">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                  </select>
               </div>
               <div class="col-md-3">
                  <label>Shift : </label>
                  <select name="shift" class="form-control " id="shift">
                     <option value="1">Morning</option>
                     <option value="2">Evening</option>
                  </select>
               </div>
               <div class="col-md-3" style="padding-top: 7px;">
                  <button type="submit"  id="get-attendance" class="btn btn-outline-dark col-md-12 mt-4">Search</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row purchace-popup mt-2">
      <div class="col-12 stretch-card grid-margin">
         <div class="card card-secondary" style="padding: 24px;">
            <div class="row">
               <div class="col-md-12">
                  <table class="table table-striped table-bordered" id="attendance_table">
                     <thead>
                        <tr>
                           <th width="5%">ID</th>
                           <th width="30%">Student Name</th>
                           <th width="10%">Reg#</th>
                           <th width="10%">Leave</th>
                           <th width="10%">Present</th>
                           <th width="10%">Absent</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection @section('script')
   <script type="text/javascript">

      $(document).ready(function () {
  

      AttendanceTable = $('#attendance_table').DataTable({
               "processing": true,
               "serverSide": true,
               "deferLoading" : 0,
               "ajax":{
                    "url": "{{route('get.attendance')}}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d){
                       if($('#student_name').val() != ''){
                           d['student_name'] = $('#student_name').val();
                           d['shift'] = $('#shift').val();
                           d['class'] = $('#class').val();

                           d['action_type'] = 'get_record';
                           d['_token'] = '{{ csrf_token() }}';
                       }else{
                           d['student_name'] = null;
                           d['shift'] = null;
                           d['class'] = null;
                           d['action_type'] = 'view';
                           d['_token'] = '{{ csrf_token() }}';
                       }
                   }
               },
               "columns": [
                   { data: 'id',           sortable: false}, 
                   { data: 'status',       sortable: false},
                   { data: 'month',        sortable: false},
                   { data: 'student_name', sortable: false},
                   { data: 'fee_type',     sortable: false},
                   { data: 'fee',          sortable: false},
               
               ],
      
           });


      
      });

       $('#get-attendance').click(function(){
        AttendanceTable.ajax.reload();
      });
      
      
     
      
      
      $('#advance_fee_form').submit(function(){ 
      
              $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
               success: function(response){
                  if(response.IsValid == true){
                  toastr.success(response.Message, 'Success');
                  }else{
                      toastr.error(response.Message, 'Error');
                  }
               }
           });
              return false;
              
        }); 
      
      function submitFee(id){
          let fee = $('.fee-'+id).val();
          let recived_fee = $('.recived_fee-'+id).val();
      
             if(confirm('Are you sure you want to Submit fee')){
         
                   $.ajax({
                 url: "{{route('fee.submit')}}", 
                 type: "POST",
                 data: {
                  id:id,
                  fee:fee,
                  recived_fee:recived_fee,
                   _token: "{{ csrf_token() }}",
                },
             
              success: function(response){
               if(response.IsValid == true){
                 toastr.success(response.Message,'Success');
                 // window.location.reload();
               }else{
                 toastr.error(response.Message,'Error');
                 // window.location.reload();
               }
             
              }});
               }
      
      
      }
      
      
      
      
      
      
      
      
          
   </script>
   <script type="text/javascript">
      $('.advance_fee').hide();
        $("#addvance_fee_check").change(function () {
      $(".advance_fee").toggle();
      });
   </script>
   @endsection
</div>