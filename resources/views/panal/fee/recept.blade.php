@extends('panal.layouts.app') @section('content')
<div class="container">
<div class="row">
   <div class="col-sm-6">
      <h4>
         <span>{{__('site.view_receipt')}}  </span>
      </h4>
   </div>
   <div class="col-sm-6 text-right">
      <a href="#" onClick="printA4Reciept()"  class="m-b-xs w-auto btn-success btn-sm  ml-3 mr-3">
      {{__('Print')}}
      </a>
      <a href="#" onclick="back()" class="m-b-xs w-auto btn-primary btn-sm ">
      {{ __('website.back') }}
      </a>
   </div>
</div>
<div class="row" id="dvA4Contents">
   <div class="col-md-6 ">
      <div  class="view-receipt" style="font-size: 12px; width: 500px;  ">
         <link rel="stylesheet" href="{{ asset('css/reciept_css.css') }}">
         <div class="reciept_body">
            <div class="main_wrapper" style="width:95% !important; margin-left:10px;">
               <div class="logo">
                  <div class="text-right">
                     <h3 class="no_slip_heading text-center  " style=" padding: 3px 12px;     margin-top: -5px; border: 2px solid black; background:black !important;     float: right; ">School Copy</h3>
                  </div>
                  <img src="" style="height:90px;margin-left: 120px; object-fit:contain;"><br>
                  <p  style="font-size: 20px; font-style: bold; margin-bottom: -4px;">{{Auth::user()->school->name}}</p>
                  <p  style="font-size: 15px; ">{{Auth::user()->school->address}}</p>
               </div>
               <div class="transaction_detail intro-table">
                  <table class="table_plan" style="font-size: 14px">
                     <tbody>
                        <tr>
                           <td width="20%">Student Name </td>
                           <td width="20%" >{{$recept->student->first()->name}}</td>
                           <td width="20%">Recept#</td>
                           <td width="20%" >{{$recept->recpt_no}}</td>
                        </tr>
                        <tr>
                           <td width="25%" >Father Name </td>
                           <td >{{$recept->student->first()->father_name}}</td>
                           <td>Date</td>
                           <td >{{date("d-m-Y",strtotime($recept->created_at))}}</td>
                        </tr>
                        <tr>
                           <td>Class </td>
                           <td>{{$recept->student->first()->class}}</td>
                           <td>Shift</td>
                           <td>{{$recept->student->first()->shift}}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="table_data">
                  <table class="table-bordered" style="font-size: 13px; color: #000000">
                     <thead>
                        <tr>
                           <th width="4%" style="font-size: 14px !important; font-weight: bold;">S#</th>
                           <th width="40%" style="font-size: 14px !important; font-weight: bold;">Month</th>
                           <th width="25%" style="font-size: 14px !important; font-weight: bold;">Fee</th>
                           <th width="25%" style="font-size: 14px !important; font-weight: bold;">Recived</th>
                           <th width="30%" style="font-size: 14px !important; font-weight: bold;">Total Fee</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr >
                           <td  style="font-size: 14px; text-align: center;">{{$recept->id}}</td>
                           <td  style="font-size: 14px; text-align: center;">{{$recept->month}}</td>
                           <td  style="text-align: right; font-size: 14px;">{{$recept->fee}}</td>
                           <td  style="text-align: right; font-size: 14px;">{{$recept->recived}}</td>
                           <td  style="text-align: right; font-size: 14px;">{{$recept->total}}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <table class="table-bordered" style="font-size: 14px; color: #000000">
                  <tbody>
                     <tr class="total">
                        <td>@lang('site.subtotal')</td>
                        <td style="text-align: right;">{{$recept->total}}</td>
                     </tr>
                     <!--  <tr class="total">
                        <td>Shipping and Tax</td>
                        <td style="text-align: right;">name
                        </td>
                        </tr> -->
                     <tr class="total">
                        <td>{{__('site.total')}}</td>
                        <td style="text-align: right;"><b>{{$recept->total}}</b></td>
                     </tr>
                     <!--  <tr class="total">
                        <td>{{__('site.payment_method')}}</td>
                        <td style="text-align: right;">name
                        </td>
                        </tr> -->
                     <br>  <br>
                     <tr  class="total">
                        <td >
                           <b>Sign : </b> Sign__________________ <br><br>
                           <b>Recived By: </b> {{Auth::user()->name}}
                        </td>
                     </tr>
                  </tbody>
               </table>
               <div class="footer" style="    height: 21px; padding-top: 0px;">
                  <p  style="color: #000000; font-family: cursive !important;">Develop By : AR-Tech Solutions</p>
               </div>
            </div>
         </div>
      </div>
   </div>
    <div class="col-md-6 ">
      <div  class="view-receipt" style="font-size: 12px; width: 500px;  ">
         <link rel="stylesheet" href="{{ asset('css/reciept_css.css') }}">
         <div class="reciept_body">
            <div class="main_wrapper" style="width:95% !important; margin-left:10px;">
               <div class="logo">
                  <div class="text-right">
                     <h3 class="no_slip_heading text-center  " style=" padding: 3px 12px;     margin-top: -5px; border: 2px solid black; background:black !important;     float: right; ">Student Copy</h3>
                  </div>
                  <img src="" style="height:90px;margin-left: 120px; object-fit:contain;"><br>
                  <p  style="font-size: 20px; font-style: bold; margin-bottom: -4px;">{{Auth::user()->school->name}}</p>
                  <p  style="font-size: 15px; ">{{Auth::user()->school->address}}</p>
               </div>
               <div class="transaction_detail intro-table">
                  <table class="table_plan" style="font-size: 14px">
                     <tbody>
                        <tr>
                           <td width="20%">Student Name </td>
                           <td width="20%" >{{$recept->student->first()->name}}</td>
                           <td width="20%">Recept#</td>
                           <td width="20%" >{{$recept->recpt_no}}</td>
                        </tr>
                        <tr>
                           <td width="25%" >Father Name </td>
                           <td >{{$recept->student->first()->father_name}}</td>
                           <td>Date</td>
                           <td >{{date("d-m-Y",strtotime($recept->created_at))}}</td>
                        </tr>
                        <tr>
                           <td>Class </td>
                           <td>{{$recept->student->first()->class}}</td>
                           <td>Shift</td>
                           <td>{{$recept->student->first()->shift}}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="table_data">
                  <table class="table-bordered" style="font-size: 13px; color: #000000">
                     <thead>
                        <tr>
                           <th width="4%" style="font-size: 14px !important; font-weight: bold;">S#</th>
                           <th width="40%" style="font-size: 14px !important; font-weight: bold;">Month</th>
                           <th width="25%" style="font-size: 14px !important; font-weight: bold;">Fee</th>
                           <th width="25%" style="font-size: 14px !important; font-weight: bold;">Recived</th>
                           <th width="30%" style="font-size: 14px !important; font-weight: bold;">Total Fee</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr >
                           <td  style="font-size: 14px; text-align: center;">{{$recept->id}}</td>
                           <td  style="font-size: 14px; text-align: center;">{{$recept->month}}</td>
                           <td  style="text-align: right; font-size: 14px;">{{$recept->fee}}</td>
                           <td  style="text-align: right; font-size: 14px;">{{$recept->recived}}</td>
                           <td  style="text-align: right; font-size: 14px;">{{$recept->total}}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <table class="table-bordered" style="font-size: 14px; color: #000000">
                  <tbody>
                     <tr class="total">
                        <td>@lang('site.subtotal')</td>
                        <td style="text-align: right;">{{$recept->total}}</td>
                     </tr>
                     <!--  <tr class="total">
                        <td>Shipping and Tax</td>
                        <td style="text-align: right;">name
                        </td>
                        </tr> -->
                     <tr class="total">
                        <td>{{__('site.total')}}</td>
                        <td style="text-align: right;"><b>{{$recept->total}}</b></td>
                     </tr>
                     <!--  <tr class="total">
                        <td>{{__('site.payment_method')}}</td>
                        <td style="text-align: right;">name
                        </td>
                        </tr> -->
                     <br>  <br>
                     <tr  class="total">
                        <td >
                           <b>Sign : </b> Sign__________________ <br><br>
                           <b>Recived By: </b> {{Auth::user()->name}}
                        </td>
                     </tr>
                  </tbody>
               </table>
               <div class="footer" style="    height: 21px; padding-top: 0px;">
                  <p  style="color: #000000; font-family: cursive !important;">Develop By : AR-Tech Solutions</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br>
</div>
@endsection
@section('script')
<script type="text/javascript">
   function  back(){
     window.history.back();
   }
     function printA4Reciept(){
        var contents = document.getElementById("dvA4Contents").innerHTML;
         var frame1 = document.createElement('iframe');
         frame1.name = "frame1";
         frame1.style.position = "absolute";
         frame1.style.top = "-1000000px";
         document.body.appendChild(frame1);
         var frameDoc = (frame1.contentWindow) ? frame1.contentWindow : (frame1.contentDocument.document) ? frame1.contentDocument.document : frame1.contentDocument;
         frameDoc.document.open();
         frameDoc.document.write('<html><head><title>Original Reciept</title>');
         frameDoc.document.write('</head><body>');
         frameDoc.document.write(contents);
         frameDoc.document.write('</body></html>');
         frameDoc.document.close();
         setTimeout(function () {
             window.frames["frame1"].focus();
             window.frames["frame1"].print();
             document.body.removeChild(frame1);
         }, 500);
         return false;
     }
</script>
@endsection