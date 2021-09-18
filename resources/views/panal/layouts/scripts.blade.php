<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script> -->
<!-- <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}" -->></script>
<script src="{{asset('assets/js/adminlte.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>


<script src="{{asset('assets/js/toastr.js')}}"></script>
<script src="{{asset('assets/js/dropzone.js')}}"></script>
<script src="{{asset('assets/js/my-dropzone.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<!-- <script src="{{asset('js/datatable.js') }}"></script> -->

<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

   <!-- <script src="{{asset('assets/dropzone/min/dropzone.min.js')}}" type="text/javascript"></script> -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>





 <style type="text/css">

   .toast-success{
        background-color: #20B611 !important;
   }
   .toast-error{
        background-color: #FF4653  !important;
   }
 </style>

   

    <script type="text/javascript">
 $(document).ready(function(){
          $(".alert").slideDown(300).delay(5000).slideUp(300);
    });





    toastr.options = {
      "closeButton": true,
      "debug": false,
      "positionClass": "toast-bottom-left",
      "onclick": null,
      "showDuration": "1000",
      "hideDuration": "1000",
      "timeOut": "15000",
      "extendedTimeOut": "0",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }




    $('#tc').hide();

 function addTC(){
$('#tc').toggle();
  };

var doc = new jsPDF();
var specialElementHandlers = {
    '#content': function (element, renderer) {
        return true;
    }
};
  $('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 0, 0, {
    'width': 100, // max width of content on PDF
    'elementHandlers': specialElementHandlers
},
function(bla){doc.save('saveInCallback.pdf');});
    
});




</script>
