@extends('panal.layouts.app') @section('content')
    <div class="container">
        <div class="row" style="margin-top: -21px; margin-bottom: 17px;">
            <div class="col-12">
                <h4>{{$data['title']}}</h4>
            </div>
        </div>
        @if($errors->any())
            <div class="alert alert-warning">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row purchace-popup mt-2">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style="padding: 24px;">
                    <form action="{{$data['route']}}" id="student-form" method="POST" >
                        @if($data['is_edit'] == true)
                            {{ method_field('PUT') }}
                        @endif
                        @csrf
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <form name="student_image" action="/file-upload" class="dropzone"
                                  id="my-awesome-dropzone" enctype="multipart/form-data">
                                  @csrf
                                <div class="fallback">
                                    <input name="file" type="file" style="display: none;">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hidden">
                        <div id="hidden-images">
                            @if($data['is_edit'] == true)
                                <input type="hidden" form="student-form" name="image[0][name]"
                                       value="{{ $data['student']->name }}"/>
                                <input type="hidden" form="student-form" name="image[0][path]"
                                       value="{{$data['student']->image }}"/>
                                <input type="hidden" fform="student-form" name="image[0][size]"
                                       value="0"/>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            @if($data['is_edit'] == true)
                                <label><b>Reg#:</b> {{$data['student']->reg_number}}</label>
                            @else
                                <label><b>Reg#:</b> {{getStringCode(Auth::user()->school->name).'-'.$Reg}}</label>
                            @endif
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            @if($data['is_edit'] == true)
                                <label><b>Date:</b> {{$data['student']->doa}}</label>
                            @else
                                <label><b>Date:</b> {{date("d-m-Y")}}</label>
                            @endif
                        </div>
                    </div>
                    @if($data['is_edit'] == false)
                        <input type="hidden" name="reg_num" form="student-form" form="student-form"   value="{{getStringCode(Auth::user()->school->name).'-'.$Reg}}" class="form-control" />
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <label>Student Name :</label>
                            <input type="text" name="name" form="student-form"   value="{{isset($data['student'])? $data['student']->name : null}}" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Father/Gardian Name :</label>
                            <input type="text" name="father_name" form="student-form"   value="{{isset($data['student'])?  $data['student']->father_name : null}}" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Shift :</label>
                            <select class="form-control" name="class">
                                <option form="student-form"   value="1">Morning</option>
                                <option form="student-form"   value="2">Evening</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Date of Birth :</label>
                            <input type="date" name="dob" form="student-form"   value="{{ isset($data['student'])?  $data['student']->dob : null}}"  class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label>Father/Gardian CNIC# :</label>
                            <input type="number" name="cnic" form="student-form"   value="{{isset($data['student'])? $data['student']->cnic : null}}"  class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Class :</label>
                            <select class="form-control" form="student-form"  name="class">
                                <option    value="1">1</option>
                                <option    value="2">2</option>
                                <option    value="3">3</option>
                                <option    value="4">4</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Father/Gardian Mobile # :</label>
                            <input type="number" name="mobile" form="student-form"   value="{{isset($data['student'])? $data['student']->mobile : null}}"  class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Religion :</label>
                            <select class="form-control" form="student-form" name="religion">
                                <option  value="1">Islam</option>
                                <option  value="2">Cristian</option>
                                <option  value="3">Hindu</option>
                                <option  value="4">Sikh</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Address :</label>
                            <input type="address" name="address"  form="student-form"   value="{{isset($data['student'])? $data['student']->address : null}}"  class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr />
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" form="student-form" {{(isset($data['student']) && $data['student']->hasTC != null ) ? "Checked" : ""}} name="tc" onchange="addTC()" class="form-check-input"> If Student study before in any school<i class="input-helper"></i></label>
                            </div>
                            <hr />
                        </div>
                    </div>
                    <div class="card" id="tc">
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <td>School Name</td>
                                <td>Class</td>
                                <td>Roll #</td>
                                <td>Percentage</td>
                                <td>Grade</td>
                                <td>Date of Leaving</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" class="form-control" form="student-form"  form="student-form"   value="{{isset($data['student'])? $data['student']->hasTC->school_name : null}}"  name="p_school_name"></td>
                                <td><input type="text" class="form-control" form="student-form"  form="student-form"   value="{{isset($data['student'])? $data['student']->hasTC->class: null}}"  name="p_class"></td>
                                <td><input type="text" class="form-control" form="student-form"  form="student-form"   value="{{isset($data['student'])? $data['student']->hasTC->roll_num: null}}"  name="p_roll_num"></td>
                                <td><input type="text" class="form-control" form="student-form"  form="student-form"   value="{{isset($data['student'])? $data['student']->hasTC->percentage: null}}"  name="p_percentage"></td>
                                <td><input type="text" class="form-control" form="student-form" form="student-form"   value="{{isset($data['student'])? $data['student']->hasTC->grade: null}}"  name="p_grade"></td>
                                <td><input type="text" class="form-control" form="student-form" form="student-form"   value="{{isset($data['student'])? $data['student']->hasTC->dol: null}}"  name="p_dol"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 text-right">
                            <button type="submit" form="student-form" class="btn btn-primary">
                                {{ $data['button']}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        image_upload_path = '{{ route("upload.student.image")}}';
        var form_id = 'student-form';
        p_images = JSON.parse('{!! json_encode(isset($data['student'])? $data['image'] : null) !!}');
        maxFiles = 1;



        $(function () {
            $('#student-form').submit(function () {

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function (response) {

                    },
                });
                return false;
            });

        });




    </script>
@endsection
