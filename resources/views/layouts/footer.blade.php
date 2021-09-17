</div>

<script src="{{ CustomUrl::asset('js/jquery/dist/jquery.js') }}"></script>
<script src="{{ CustomUrl::asset('js/jquery.cropit.js') }}"></script>
<script src="{{ CustomUrl::asset('js/toastr.js') }}"></script>
<!-- <script src="{{ CustomUrl::asset('js/image_uploader.js') }}"></script> -->
  

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="{{ CustomUrl::asset('js/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{CustomUrl::asset('libs/jquery/bootstrap-wysiwyg/bootstrap-wysiwyg.js') }}"></script>
<script src="{{CustomUrl::asset('libs/jquery/bootstrap-wysiwyg/external/jquery.hotkeys.js') }}"></script>



<script src="{{ CustomUrl::asset('js/dhtmlxcalendar.js')}}"></script>
<script src="{{ CustomUrl::asset('js/tabs.js')}}"></script>
<script src="{{ CustomUrl::asset('js/select2.min.js')}}"></script>

<script src="{{ CustomUrl::asset('js/ui-load.js')}} "></script>
<script src="{{ CustomUrl::asset('js/ui-jp.config.js')}} "></script>
<script src="{{ CustomUrl::asset('js/ui-jp.js')}} "></script>
<script src="{{ CustomUrl::asset('js/ui-nav.js')}} "></script>
<script src="{{ CustomUrl::asset('js/ui-toggle.js')}} "></script>
<script src="{{ CustomUrl::asset('js/ui-client.js')}} "></script>
<script src="{{ CustomUrl::asset('libs/toastr.js') }}"></script>

<!-- Barcode Library -->
<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.8.0/dist/JsBarcode.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<!-- AngularJS Libs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>

<script src="{{ CustomUrl::asset('libs/lovefield/lovefield.js')}} "></script>
<script src="{{CustomUrl::asset('libs/angular.min.js')}}"></script>
<script src="{{ CustomUrl::asset('libs/angular.sanitize.min.js')}}"></script>
<script src="{{ CustomUrl::asset('libs/angular-animate.min.js')}}"></script>
<script src="{{ CustomUrl::asset('libs/angular-route.min.js')}}"></script>
<script src="{{ CustomUrl::asset('libs/angular-aria.min.js')}}"></script>
<script src="{{ CustomUrl::asset('libs/angular-messages.min.js')}}"></script>
<script src="{{CustomUrl::asset('libs/angular-material.js')}}"></script>
<script src="{{ CustomUrl::asset('libs/moment.js')}}"></script>

<script src="{{CustomUrl::asset('libs/angular-chart.min.js')}}"></script>

<script src="{{ CustomUrl::asset('libs/angular-local-storage/dist/angular-local-storage.js')}} "></script>

<script src="{{ CustomUrl::asset('libs/ng-file-upload/dist/ng-file-upload-all.min.js')}} "></script>

<script src="{{ CustomUrl::asset('js/angular-app/app.js')}}"></script>
<script src="{{ CustomUrl::asset('js/angular-app/configuration.js')}} "></script>
<script src="{{ CustomUrl::asset('js/angular-app/services/ajax-service.js')}} "></script>
<script src="{{ CustomUrl::asset('js/angular-app/services/url-service.js')}} "></script>
<script src="{{ CustomUrl::asset('js/angular-app/services/db-service.js')}} "></script>
<script src="{{ CustomUrl::asset('js/angular-app/services/data/order-data-service.js')}} "></script>
<script src="{{ CustomUrl::asset('js/angular-app/services/cart-service.js')}} "></script>
<script src="{{ CustomUrl::asset('js/angular-app/filters/math-filters.js')}} "></script>
<script src="{{CustomUrl::asset('js/angular-app/controllers/baseCtrl.js')}} "></script>
<!-- Multiselect -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="{{CustomUrl::asset('js/js/intlTelInput.js')}} "></script>
<!-- <script src="https://www.ajaraty.com/devtestportal/public/vendors/jquery.datatables.js"></script> -->
<!-- <script src="{{CustomUrl::asset('js/jquery.jquery-3.3.1.js')}} "></script> -->
<!-- <script src="{{CustomUrl::asset('js/jquery.dataTables.min.js')}} "></script> -->


<script type="text/javascript" language="javascript"> 
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "positionClass": "toast-top-right",
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
      var $loading = $('#LoaderDiv').hide();
      $(document)
        .ajaxStart(function () {
          $loading.show();
        })
        .ajaxStop(function () {
          $loading.hide();
        });    
      $.ajaxSetup({ headers: { 'csrftoken' : `${window.Laravel}` } });
       

        $(document).ready(function(){
          if($('#error-message').html() != '' && $('#error-message').html().trim().length > 10){
            toastr.error($('#error-message').html(),'Error');
          }
        })
    $(function(){
      $("#includedheader").load("header.html");
      $("#includeaside").load("aside.html");    
    });
    $(document).ready(function(){
      $("#logout_button").click(function(){
        var IsRegisterOpen = localStorage.getItem('isRegisterOpen');
         if (!IsRegisterOpen || localStorage.getItem('isRegisterOpen')=='false' || localStorage.getItem('openRegister') == 'null' || localStorage.getItem('openRegister') == 0 || localStorage.getItem('registerHistoryId') == 'null') {
         		// window.localStorage.removeItem('pos.cart');
           //  window.localStorage.removeItem('currency');
           localStorage.clear();
         		document.getElementById('logout-form').submit();
         }
         else{
         		$('#closeRegId').modal('show');
         		setTimeout(function(){window.location.href = "{{URL::to('registerbook')}}"},3000);  
         }

         
      });
    let message = $('.alert-s').html();
    if(message != undefined){
      toastr.success(message,'Success');
    }

    let message2 = $('.alerte').html();
    if(message2 != undefined){
      toastr.error(message2,'Error');
    }


    });
</script>
<script>
   var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      utilsScript: "{{CustomUrl::asset('js/js/utils.js')}} ",
    });

   var input = document.querySelector("#phone");
   intlTelInput(input, {
       utilsScript: "{{CustomUrl::asset('js/js/utils.js')}}"
   });

   var input = document.querySelector("#phone"),
       errorMsg = document.querySelector("#error-msg"),
       validMsg = document.querySelector("#valid-msg");

   // Error messages based on the code returned from getValidationError
   var errorMap = [ "Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

   // Initialise plugin
   var intl = window.intlTelInput(input, {
       utilsScript: "{{CustomUrl::asset('js/js/utils.js')}}"
   });

   var reset = function() {
       input.classList.remove("error");
       errorMsg.innerHTML = "";
       errorMsg.classList.add("hide");
       validMsg.classList.add("hide");
   };

   // Validate on blur event
   input.addEventListener('blur', function() {
       reset();
       if(input.value.trim()){
           if(intl.isValidNumber()){
               validMsg.classList.remove("hide");
           }else{
               input.classList.add("error");
               var errorCode = intl.getValidationError();
               errorMsg.innerHTML = errorMap[errorCode];
               errorMsg.classList.remove("hide");
           }
       }
   });
   var input = document.querySelector("#phone");
   intlTelInput(input, {
       initialCountry: "auto",
       geoIpLookup: function(success, failure) {
           $.get("https://ipinfo.io?token=5d97f285ff1d4d", function() {}, "jsonp").always(function(resp) {
               var countryCode = (resp && resp.country) ? resp.country : "";
               success(countryCode);
           });
       },
       utilsScript: "{{CustomUrl::asset('js/js/utils.js')}}"
   });

   // Reset on keyup/change event
   input.addEventListener('change', reset);
   input.addEventListener('keyup', reset);
</script>
<script >
        $(document).ready(function() {
          $(".toggle-password").click(function() {
            // console.log('jkk');
          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });
          });
        </script>
<!-- use when user change store or view store -->       
<script>
  function viewStore(store_id){
    var data  = {'store_id': store_id};
    $.ajax({
        url: site_url('general/select_store'),
        type: 'post',
        data: data,
        success: function (response) {
           window.location.href = site_url('home');
        }
    })
    return false;
  }
</script>        


</body>
</html>
