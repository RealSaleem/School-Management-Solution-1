@extends('panal.layouts.app') @section('content')

<div class="container">
    <div class="row" style="margin-top: -21px; margin-bottom: 17px;">
        <div class="col-6">
            <h4>Staff</h4>
        </div>
        <div class="col-6 text-right">
            <a href="{{route('staff.create')}}" class="btn btn-primary">Add</a>
        </div>
    </div>
    <div class="row purchace-popup mt-2">
        <div class="col-12 stretch-card grid-margin">
            <div class="card card-secondary" style="padding: 24px;">
                <table id="student_table" class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Shift</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staffs as $staf)
                        <tr>
                            <td></td>
                            <td>{{$staff->name}}</td>
                            <td>{{$staff->roles[0]->name}}</td>
                            <td>{{$staff->shift}}</td>
                            <td>{{$staff->shift}}</td>
                            <td>
                              <a href="#">View</a>
                              <a href="#">Edit</a>
                              <a href="#">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection @section('script')
<script type="text/javascript">
    $("#student_table").DataTable();
</script>

@endsection
