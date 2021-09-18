@extends('panal.layouts.app')
@section('content')
<style type="text/css">
   /* The switch - the box around the slider */
   .switch {
   position: relative;
   display: inline-block;
   width: 53px !important;
   height: 23px !important;
   }
   /* Hide default HTML checkbox */
   .switch input {
   opacity: 0;
   width: 0;
   height: 0;
   }
   /* The slider */
   .slider {
   position: absolute;
   cursor: pointer;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background-color: #ccc;
   -webkit-transition: .4s;
   transition: .4s;
   }
   .slider:before {
   position: absolute;
   content: "";
   height: 19px;
   width: 19px;
   left: 4px;
   bottom: 2px;
   background-color: white;
   -webkit-transition: .4s;
   transition: .4s;
   }
   input:checked + .slider {
   background-color: #2196F3;
   }
   input:focus + .slider {
   box-shadow: 0 0 1px #2196F3;
   }
   input:checked + .slider:before {
   -webkit-transform: translateX(26px);
   -ms-transform: translateX(26px);
   transform: translateX(26px);
   }
   /* Rounded sliders */
   .slider.round {
   border-radius: 34px;
   }
   .slider.round:before {
   border-radius: 50%;
   }
</style>
<div class="container">
   <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
      <div class="col-6 ">
         <h4>Schools</h4>
      </div>
      <div class="col-6 text-right">
         <a href="{{route('schools.create')}}" class="btn btn-primary btn-rounded btn-fw" >Add School</a> 
      </div>
   </div>
   <div class="row purchace-popup mt-2">
      <div class="col-12 stretch-card grid-margin">
         <div class="card card-secondary" style="    padding: 24px;">
            <table id="myTable" class="table table-striped " style="width:100%">
               <thead>
                  <tr>
                     <th>School Name</th>
                     <th>Owner Name</th>
                     <th>Active</th>
                     <th>Verified</th>
                     <th width="06%">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($schools as $school)
                  <tr>
                     <td>{{$school->name}}</td>
                     <td>{{$school->owner_name}}</td>
                     <td><label class="switch">
                        <input type="checkbox" onchange="changeStatus({{$school->id}})" {{($school->is_active == 1) ? 'checked' : ""}}    >
                        <span class="slider round"></span>
                        </label>
                     </td>
                     <td>
                        @php
                        $string = ($school->is_verified == 1) ? 'Verified' : 'Not Verified';
                        @endphp
                        <span @if($school->is_verified == 1) Class= "badge badge-success" @else Class= "badge badge-danger" @endif >{{$string}}</span>
                     </td>
                     <td>
                        <span  style="padding: 9px 8px; color:dodgerblue;"  class="btn-rounded btn-icon" data-toggle="dropdown" aria-expanded="false" id="UserDropdown   "> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                           <a class="dropdown-item" href="{{route('schools.show',$school->id)}}"> View </a>
                           <a class="dropdown-item" href="{{route('schools.edit',$school->id)}}"> Edit</a>
                           <a class="dropdown-item text-danger" onclick="deleteSchool({{$school->id}})" 
                              > Delete</a>
                        </div>
                     </td>
                  </tr>
                  @endforeach
                  </tfoot>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
   $(document).ready( function () {
   $('#myTable').DataTable();
   
   
   });
   function changeStatus(id){
   
       $.ajax({
           url: "{{route('schools.updateStatus')}}", 
           type: "POST",
           data: {
            id:id,
             _token: "{{ csrf_token() }}",
          },
       
        success: function(response){
         if(response.IsValid == true){
           toastr.success(response.Message,'Success');
         //  $.jnoty(response.Message, {
         //   sticky: true,
         //   header: 'Success',
         //   theme: 'jnoty-Success',
         //   icon: 'fa fa-check-circle fa-2x'
         // });
         }
       
        }});
       
   }
   
   function deleteSchool(id){
   if(confirm('Are you sure you want to delete this school')){
   
             $.ajax({
           url: "{{url('schools/delete')}}", 
           type: "POST",
           data: {
            id:id,
             _token: "{{ csrf_token() }}",
          },
       
        success: function(response){
         if(response.IsValid == true){
           toastr.success(response.Message,'Success');
           window.location.reload();
         }else{
           toastr.error(response.Message,'Error');
           window.location.reload();
         }
       
        }});
         }
   
   }
</script>
@endsection