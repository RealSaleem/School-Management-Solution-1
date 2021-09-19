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
                        <div class="col-md-12 form-inline">
                           <label>Class : </label>
                            <select name="class" class="form-control col-md-4 m-2">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                            <label>Shift : </label>
                           <select name="shift" class="form-control col-md-4 m-2">
                              <option value="1">Morning</option>
                              <option value="2">Evening</option>
                            </select>
                            
                            <button type="submit"  id="get-attendance" class="btn btn-info col-md-2">Search</button>
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
                        <table class="table table-striped table-bordered" id="attendance-table">
                               <thead>
                                   <tr>
                                      <th width="5%">ID</th>
                                      <th width="30%">Student Name</th>
                                      <th width="10%">Reg#</th>
                                      <th width="10%">Leave</th>
                                      <th width="10%">Present</th>
                                      <th width="10%">Absent</th>
                                      <th width="20%">Action</th>
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
        
let AttendanceTable = null;
$(document).ready(function () {

AttendanceTable = $('#attendance-table').DataTable({
         "processing": true,
         "serverSide": true,
         "deferLoading" : 0,
         "ajax":{
              "url": "{{route('fee.getStudentData')}}",
              "dataType": "json",
              "type": "POST",
              "data": function(d){
                 if($('#student_id').val() != ''){
                     d['student_id'] = $('#student_id').val();
                     d['action_type'] = 'get_record';
                     d['_token'] = '{{ csrf_token() }}';
                 }else{
                     d['student_id'] = null;
                     d['action_type'] = 'view';
                     d['_token'] = '{{ csrf_token() }}';
                 }
             }
         },
         "columns": [
             { data: 'id',           sortable: false }, 
             { data: 'status',       sortable: false,
              render: function (column, row, data) 
                {
                    if(data.status == 'Paid'){
                        return ` <span class="badge badge-success status">${data.status}</span> `;
                    }else{
                        return `<span class="badge badge-danger status">${data.status}</span>`;
                    }  
                }
             },
             { data: 'month',        sortable: false },
             { data: 'student_name', sortable: false },
             { data: 'fee_type',     sortable: false },
             { data: 'fee',          sortable: false,
              render: function (column, row, data) 
                {
                    if(data.status == 'Paid'){
                        return ` <span>${data.fee}</span> `;
                    }else{
                        return ` <input type="text" name="fee"  class="form-control fee-${data.id}"> `;
                    }
                   
                }
             },

             { data: 'recived_fee',  sortable: false,
              render: function (column, row, data) 
                {
                    if(data.status == 'Paid'){
                        return ` <span>${data.recived_fee}</span> `;
                    }else{
                        return ` <input type="text" name="recived_fee"  class="form-control recived_fee-${data.id}"> `;
                    }  
                }
             },
             { data: 'action',       sortable: false,
                render: function (column, row, data) 
                {
              if(data.status == 'Paid')
                    {
                    return ` <a href="{{url('fee/recept/${data.id}')}}" class="btn  btn-flat btn-gray text-right" >Print</a> `;
                    }
                    else
                    {
                    return ` <a href="javascript:;" class="btn  btn-flat btn-seagreen  text-right" onclick="submitFee(${data.id})" >Submit</a> `;
                    }
                }
            },
         
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
