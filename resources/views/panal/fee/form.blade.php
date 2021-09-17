@extends('panal.layouts.app')
@section('content')

  <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" style=" margin-top: -21px; margin-bottom: 17px;">
              <div class="col-6 ">
                <h4>Add School</h4>
              </div>
            </div>
            <div class="row purchace-popup mt-2">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary" style=" padding: 24px;">
                
<form action="{{route('schools.store')}}" method="POST" enctype=""> 
<div class="row">
  <div class="col-md-8">

<div class="row">
  <div class="col-md-6">
   <div class="form-group">
    <label class="label">School Name :</label>
    <input type="text" name="name" class="form-control">
   </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="label">Owner Name :</label>
      <input type="text" name="owner_name" class="form-control">
    </div>
</div>
</div>



<div class="row">
  <div class="col-md-6">
  <div class="form-group">
    <label class="label">Email:</label>
    <input type="text" name="email" class="form-control">
  </div>
</div>
 <div class="col-md-6">
  <div class="form-group">
    <label class="label">Mobile Number :</label>
    <input type="number" name="number" class="form-control">
  </div>
</div>
</div>

<div class="row">
  <div class="col-md-6">
  <div class="form-group">
    <label class="label">School Address:</label>
    <input type="text" name="address" class="form-control">
  </div>
</div>
 <div class="col-md-6">
  <div class="form-group">
    <label class="label">Owner CNIC# :</label>
    <input type="number" name="cnic" class="form-control">
  </div>
</div>
</div>




</div>
  <div class="col-md-3">
    <div class="card card-secondary" style=" padding: 24px;">
    <div class="form-check form-check-primary">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="active" > Active <i class="input-helper"></i></label>
      </div>
      <div class="form-check form-check-primary">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="verified" > Verified <i class="input-helper"></i></label>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 text-right">
    <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
  </div>


</form>

         
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection
@section('script')

@endsection