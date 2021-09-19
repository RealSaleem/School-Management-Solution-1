@extends('panal.layouts.app')
@section('content')

  <div class="container">
            <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
              <div class="col-6 ">
                <h4>Add Permissions</h4>
              </div>
            </div>
            <div class="row purchace-popup mt-2">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style=" padding: 24px;">

                  <form action="{{route('permission.store')}}" method="POST" >
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <label>Permission Name :</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                     <div class="col-md-6">
                     <label>Permission Type :</label>
                     <select class="form-control" name="type">
                      <option value="1">User</option>
                      <option value="1">User</option>
                     </select>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 text-right" style="padding-top: 30px;">
                     <button type="submit" class="btn btn-primary">
                       Add Permission
                     </button>
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