@extends('panal.layouts.app') @section('content')

<div class="container">
    <div class="row" style="margin-top: -21px; margin-bottom: 17px;">
        <div class="col-6">
            <h4>{{$model['title']}}</h4>
        </div>
    </div>
    <div class="container col-md-10">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <!-- Dropzone -->
                    <form action="{{route('upload.user.image')}}" class="dropzone" style="border: 3px dotted dodgerblue;">
                        <input type="hidden" name="image" form="user-form" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row purchace-popup mt-2">
    <div class="col-12 stretch-card grid-margin">
        <div class="card card-secondary" style="padding: 24px;">
            <form action="{{$model['route']}}" method="POST" id="user-form">
                @csrf
                @if($model['is_edit'] == true)
                {{ method_field('PUT') }}
                <input type="hidden" name="id" value="{{isset($model['user']) ? $model['user']->id : null}}">
                @endif
                <div class="container col-md-10">
                    <div class="row">
                        <div class="col-md-4">
                            <label>User Name :</label>
                            <input type="text" name="name" form="user-form" value="{{ isset($model['user']) ? $model['user']->name : null}}" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Email :</label>
                            <input type="email" name="email" value="{{ isset($model['user']) ? $model['user']->email : null}}"  form="user-form" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Role :</label>

                            <select class="form-control" name="role" form="user-form">
                                @foreach($model['roles'] as $role)
                                <option  {{( isset($model["user"]->roles[0]) && $model['user']->roles[0]->name == $role->name) ? 'Selected' : ""}}   value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Password :</label>
                            <input type="password" name="password" form="user-form" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label>Confirm Password :</label>
                            <input type="password" name="password" form="user-form" class="form-control" />
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 text-right">
                            <button type="submit" form="user-form" class="btn btn-primary">
                               {{$model['button']}}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection @section('script')
<script>
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone(".dropzone", {
        maxFilesize: 3, // 3 mb
        acceptedFiles: ".jpeg,.jpg,.png,.pdf",
    });
    myDropzone.on("sending", function (file, xhr, formData) {
        formData.append("_token", CSRF_TOKEN);
    });
</script>

@endsection
