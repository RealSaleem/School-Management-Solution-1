@extends('panal.layouts.app')
@section('content')

  <div class="container">
            <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
              <div class="col-6 ">
                <h4>User</h4>
              </div>
              <div class="col-6 text-right">
                <a href="{{route('user.create')}}" class="btn btn-primary" >Add User</a> 
              </div>
            </div>
            <div class="row purchace-popup mt-2">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style="    padding: 24px;">
                
             <table id="myTable" class="table table-bordered table-striped   " style="width:100%">
             <thead>
            <tr>
                <th width="10%">Id</th>
                <th width="30%">User Name</th>
                <th width="10%">Role</th>
                <th width="15%">Action</th>
            </tr>
           </thead>
           <tbody>
            @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                 <td>{{(Auth::user()->type != 0)? $user->roles[0]->name : NULL}}</td>
                <td>
                  <a href="{{route('user.edit',$user->id)}}" class="btn btn-secondary btn-sm">Edit</a>
                    <a href="{{route('user.destroy',$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
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

@endsection