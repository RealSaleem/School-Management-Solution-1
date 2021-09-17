@extends('panal.layouts.app') @section('content')

<div class="container">
    <div class="row" style="margin-top: -21px; margin-bottom: 17px;">
        <div class="col-6">
            <h4>Add School</h4>
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
                <form action="{{route('schools.store')}}" method="POST" enctype="" id="school-form">
                    @csrf
                </form>

                                      <div class="row">
                        <div class="col-md-12">
                            <form name="school_image" action="/file-upload" class="dropzone"
                                  id="my-awesome-dropzone" enctype="multipart/form-data">
                                <div class="fallback">
                                    <input name="file" type="file" style="display: none;">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hidden">
                        <div id="hidden-images">
                            @if(isset($data) && $data['is_edit'] == true)
                                <input type="hidden" form="school-form" name="image[0][name]"
                                       value="{{ $data['student']->name }}"/>
                                <input type="hidden" form="school-form" name="image[0][path]"
                                       value="{{$data['student']->image }}"/>
                                <input type="hidden" fform="school-form" name="image[0][size]"
                                       value="0"/>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">School Name :</label>
                                        <input type="text" form="school-form"  name="name" class="form-control" value="{{old('name')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Owner Name :</label>
                                        <input type="text" form="school-form"  name="owner_name" value="{{old('owner_name')}}" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Email:</label>
                                        <input type="text" form="school-form"  name="email" value="{{old('email')}}"  class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Mobile Number :</label>
                                        <input type="number" form="school-form"  name="number"  value="{{old('number')}}"  class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">School Address:</label>
                                        <input type="text" form="school-form"  name="address"  value="{{old('address')}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Owner CNIC# :</label>
                                        <input type="number" form="school-form"  name="cnic"  value="{{old('cnic')}}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-secondary" style="padding: 24px;">
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label"> <input type="checkbox" class="form-check-input" form="school-form"  name="active" /> Active <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label"> <input type="checkbox" class="form-check-input" form="school-form"  name="verified" /> Verified <i class="input-helper"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button type="submit" form="school-form" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
</div>

@endsection 
@section('script')
    <script type="text/javascript">
        image_upload_path = '{{ route("upload.school.image")}}';
        var form_id = 'school-form';
        p_images = JSON.parse('{!! json_encode(isset($data['student'])? $data['image'] : null) !!}');
        maxFiles = 1;



        $(function () {
            $('#school-form').submit(function () {

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
