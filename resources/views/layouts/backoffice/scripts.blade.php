<script src="{{ CustomUrl::asset('site/lib/jquery/jquery.min.js')  }}"></script>
<script src="{{ CustomUrl::asset('site/lib/bootstrap/js/bootstrap.bundle.min.js')  }}"></script>
<!-- <script src="{{ CustomUrl::asset('site/assets/js/main.js')  }}"></script> -->
<script src="{{ CustomUrl::asset('site/assets/js/ui-nav.js')  }}"></script>
<script src="{{ CustomUrl::asset('site/assets/js/ui-toggle.js')  }}"></script>
<script src="{{CustomUrl::asset('js/charactercount/jquery.character-counter.js') }}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script src="{{ CustomUrl::asset('js/select2.min.js') }}"></script>
<script src="{{ CustomUrl::asset('js/toastr.js') }}"></script>
<script src="{{CustomUrl::asset('js/js/intlTelInput.js')}} "></script>




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

</script>
<script>
  	$(document).ready(function() {
    	$('.select2').select2();
	});

</script>
