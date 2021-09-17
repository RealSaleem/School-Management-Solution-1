@extends('panal.layouts.app')
@section('content')

        <div class="container">
            <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
              <div class="col-6 ">
                <h4>Fee Settings</h4>
              </div>
              <div class="col-6 text-right">
              </div>
            </div>





            <div class="row purchace-popup mt-2">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style="    padding: 24px;">
                  <div class="row">
                    <div class="col-md-6">
                      <span style="    display: inline-flex;">
                         <h4>Fee Type</h4>
                       <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#feeTypeModel" style="margin-left: 289px;">ADD</button>
                      </span>
                     
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <td width="80%">Fee Type</td>
                               <td width="20%">Action</td>
                            </tr>
                          </thead>
                          <tbody>
                            
                        @foreach($getFeeType as $feeType)
                        <tr>
                          <td>{{$feeType->fee_type}}</td>
                          <td> <a href="#" class="btn btn-link btn-sm">Edit</a></td>
                        </tr>
                        @endforeach
                          
                          </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
              </div>
            </div>
          </div>
      


<div class="modal fade" id="feeTypeModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Fee Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="fee_type_form" action="{{route('fee.setting.update')}}" method="POST">
          @csrf
          <input type="text" name="name" form="fee_type_form" class="form-control">
          <input type="hidden" name="form_type" form="fee_type_form" value="fee_type" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="fee_type_form"  class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>







@endsection
@section('script')

@include('panal.layouts.dropzone')
@endsection
