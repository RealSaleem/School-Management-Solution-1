@extends('panal.layouts.app')
@section('content')

  <div class="container">
            <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
              <div class="col-6 ">
                <h4>Roles & Permissions</h4>
              </div>
              <div class="col-6 text-right">
                <a href="{{route('role.create')}}" class="btn btn-primary" >Add Role</a> 
                 @if(IsAdmin())
                 <a href="{{url('/role/permission/create')}}" class="btn btn-primary" >Add Permissions</a> 
                 @endif
              </div>
            </div>
            <div class="row purchace-popup mt-2">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style="    padding: 24px;">
                
                    <table id="role_table" class="table table-bordered table-striped " style="width:100%">
                          <thead>
            <tr>
                <th width="10%">Id</th>
                <th width="70%">Role Name</th>
                <th>Action</th>
                
            </tr>
                          </thead>
                          <tbody>
             @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>
                  <a href="{{route('role.edit',$role->id)}}" class="btn btn-outline-secondary btn-sm">Edit</a>
                    <a href="{{route('role.destroy',$role->id)}}" class="btn btn-outline-danger  btn-sm">Delete</a>
                </td>
               
            </tr>
            @endforeach
          
                    </table>
                </div>
              </div>
            </div>
          </div>


@endsection
@section('script')
<script type="text/javascript">
  $('#role_table').DataTable();
</script>

@endsection