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


        <div class="main-panel">
            <div class="row purchace-popup mt-2">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style="    padding: 24px;">
                  <div class="row">
                     <div class="col-md-6">
                     <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td><b>Id</b></td>
                        <td>{{$schools->id}}</td>
                      </tr>
                      <tr>
                        <td><b>School Name</b></td>
                        <td>{{$schools->name}}</td>
                      </tr>
                      <tr>
                        <td><b>School Address</b></td>
                        <td>{{$schools->address}}</td>
                      </tr>
                      <tr>
                        <td><b>Owner Name</b></td>
                        <td>{{$schools->owner_name}}</td>
                      </tr>
                       <tr>
                        <td><b>Owner CNIC#</b></td>
                        <td>{{$schools->owner_cnic_number}}</td>
                      </tr>

                       
                      </tr>
                    </tbody>
                  </table>
                      </div>
                      <div class="col-md-6">
                        <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td><b>Active</b></td>
                        <td>
                          @php
                            $verified_string = ($schools->is_verified == 1) ? 'Verified' : 'Not Verified';
                            $active_string = ($schools->is_active == 1) ? 'Active' : 'Not Active';
                          @endphp
                          <span @if($schools->is_active == 1) Class= "badge badge-success" @else Class= "badge badge-danger" @endif >{{$active_string}}</span>
                        </td>
                      </tr>
                      <tr>
                        <td><b>Verified</b></td>
                        <td>
                          <span @if($schools->is_verified == 1) Class= "badge badge-success" @else Class= "badge badge-danger" @endif >{{$verified_string}}</span>
                        </td>
                      </tr>

                 

                       
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

@endsection