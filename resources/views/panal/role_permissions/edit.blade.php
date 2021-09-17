@extends('panal.layouts.app')
@section('content')

  <div class="container">
 
            <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
              <div class="col-6 ">
                <h4>Update Role</h4>
              </div>
            </div>
            <div class="row purchace-popup mt-2">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style=" padding: 24px;">

                <form action="{{route('role.update',$role->id)}}" method="POST" id="role_form">
                  @csrf
                     {{ method_field('PUT') }}
                    <div class="row">
                    <div class="col-md-8">
                      <label>Role Name :</label>
                      <input type="text" name="name" value="{{$role->name}}" form="role_form" class="form-control">
                    </div>
                     <div class="col-md-4 text-right" style="padding-top: 30px;">
                     <button type="submit" class="btn btn-primary">
                       Submit
                     </button>
                    </div>
                    </div>
                    <hr>

                    <div class="row">
                    <div class="col-md-12">
                      <h4>Permissions : </h4>
                      @foreach($permissions  as $permission)
                      @php
                      $status = in_array(array($permission->name),array($role->permissions[0])) ? 'Checked' : null;
                      @endphp
                      <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox"{{$status}} name="permissions[]" form="role_form" class="form-check-input" value="{{$permission->id}}"> {{$permission->name}} <i class="input-helper"></i>
                            </label>
                          </div>
                      @endforeach
                    </div>
                    </div>
                </form>

         
                </div>
              </div>
            </div>
          </div>


@endsection
@section('script')

@endsection