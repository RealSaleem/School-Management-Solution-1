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
</style>


<div class="container">
    <div class="row purchace-popup mt-2">
        <div class="col-12 stretch-card grid-margin">
            <div class="card card-secondary" style="padding: 24px;">
                <span>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-success custom-control-input-outline" type="checkbox" id="addvance_fee_check" />
                        <label for="addvance_fee_check" class="custom-control-label">Advance Fee</label>
                    </div>
                </span>

                <div class="advance_fee">
                    <form action="{{route('fee.store.advamce')}}" method="POST" id="advance_fee_form">
                        @csrf
                    </form>
                        <div class="row mt-4 ml=2">
                            <div class="col-md-2">
                              <label>Student ID</label>
                                <input type="text" form="advance_fee_form" name="std_id" id="std_id" class="form-control" />
                            </div>
                            <div class="col-md-2">
                                <label>Fee Type</label>
                                <select class="form-control" name="feetype" form="advance_fee_form">
                                  <option>Select Fee Type</option>
                                  @foreach(App\Models\FeeType::where('school_id',Auth::user()->school->id)->get() as $feetype)
                                  <option value="{{$feetype->id}}">{{$feetype->fee_type}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Fee</label>
                                <input type="text" name="fee" form="advance_fee_form" id="fee" class="form-control" />
                            </div>

                            <div class="col-md-3">
                                <label>Fee Recived</label>
                                <input type="text" name="recive_fee" form="advance_fee_form" id="recive_fee" class="form-control" />
                            </div>

                            <div class="col-md-2" style="padding-top: 11px;">
                              <button type="submit" form="advance_fee_form" class="btn btn-primary btn-sm mt-4 ">Submit</button>
                            </div>
                        </div>
                  
                </div>
            </div>
        </div>
    </div>

    <div class="row purchace-popup mt-2">
        <div class="col-12 stretch-card grid-margin">
            <div class="card card-secondary" style="padding: 24px;">
                    <div class="row">
                        <div class="col-md-12 form-inline">
                            <label>Search by Student ID:</label>
                            <input type="text" name="student_id" id="student_id" class="form-control col-md-8 ml-4" />
                            <button type="submit"  id="fee_get" class="btn btn-info">Search</button>
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
                        <table class="table table-striped" id="fee_table">
                               <thead>
                                   <tr>
                                      <th width="5%">ID</th>
                                      <th width="10%">Status</th>
                                      <th width="10%">Month</th>
                                      <th width="25%">Student Name</th>
                                      <th width="15%">Fee Type</th>
                                      <th width="10%">Fee</th>
                                      <th width="10%">Recive Fee</th>
                                      <th width="10%">Action</th>
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


FeeTable = $('#fee_table').DataTable({
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
                 }else{
                     d['student_id'] = null;
                     d['action_type'] = 'view';
                 }
             }
         },
         "columns": [
             { data: 'id',           sortable: false }, 
             { data: 'status',       sortable: false,
              render: function (column, row, data) 
                {
                    if(data.status == 'Paid'){
                        return ` <span class="badge badge-success badge-theme">${data.status}</span> `;
                    }else{
                        return `<span class="badge badge-danger badge-theme">${data.status}</span>`;
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
                        return ` <input type="text" name="fee"  class="form-control"> `;
                    }
                   
                }
             },

             { data: 'recived_fee',  sortable: false,
              render: function (column, row, data) 
                {
                    if(data.status == 'Paid'){
                        return ` <span>${data.recived_fee}</span> `;
                    }else{
                        return ` <input type="text" name="recived_fee"  class="form-control"> `;
                    }  
                }
             },
             { data: 'action',       sortable: false,
                render: function (column, row, data) 
                {
                    if(data.status == 'Paid')
                    {
                    return ` <a href="javascript:;  " class="btn  btn-flat btn-gray text-right" >Print</a> `;
                    }
                    else
                    {
                    return ` <a href="javascript:;" class="btn  btn-flat btn-seagreen  text-right" >Submit</a> `;
                    }
                }
            },
         
         ],

     });
});


$('#fee_get').click(function(){
  FeeTable.ajax.reload();
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








    </script>
    <script type="text/javascript">
          $('.advance_fee').hide();
            $("#addvance_fee_check").change(function () {
      $(".advance_fee").toggle();
  });
    </script>

    @endsection
</div>
