@extends('panal.layouts.app')
@section('content')

    <div class="container">

        <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
            <div class="col-6 ">
                <h4>Students</h4>
            </div>
            <div class="col-6 text-right">
                <a href="{{route('students.create')}}" class="btn btn-primary" >Add</a>
            </div>
        </div>
        <div class="row purchace-popup mt-2">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style="    padding: 24px;">

                    <table id="student_table" class="table table-bordered table-striped " style="width:100%">
                        <thead>
                        <tr>
                            <!-- <th>Image</th> -->
                            <th>Reg#</th>
                            <th>Student Name</th>
                            <th>Father Name</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                            <!--    <td>{{$student->image}}</td> -->
                                <td>{{$student->reg_number}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->class}}</td>
                                <td>{{$student->father_name}}</td>
                                <td>
                                    <span   class="btn-rounded btn-icon" data-toggle="dropdown" aria-expanded="false" id="UserDropdown   "> <button class="btn btn-flat bg-gradiant btn-primary">Action</button></span>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                        <a class="dropdown-item" href="{{url('students/getPDF/'.$student->id)}}"> Print Addmission Form </a>
                                        <a class="dropdown-item" href="{{route('students.show',$student->id)}}"> View </a>
                                        <a class="dropdown-item" href="{{route('students.edit',$student->id)}}"> Edit</a>
                                        <a class="dropdown-item text-danger" href="{{route('students.destroy',$student->id)}}"> Delete</a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('script')
    <script type="text/javascript">
        $('#student_table').DataTable();
    </script>

@endsection
