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




<script src="{{CustomUrl::asset('js/angular-app/services/data/store-data-service.js')}} "></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/product-data-service.js')}} "></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/currency-data-service.js')}} "></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/category-data-service.js') }}"></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/tag-data-service.js') }}"></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/supplier-data-service.js') }}"></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/city-data-service.js')}} "></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/brand-data-service.js') }}"></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/variant-data-service.js') }}"></script>
<script src="{{CustomUrl::asset('js/angular-app/services/data/outlet-data-service.js') }}"></script>
<script src="{{CustomUrl::asset('js/angular-app/controllers/product/edit_modified-product-controller.js') }}"></script>
<script src="{{CustomUrl::asset('js/angular-app/services/language-service.js')}} "></script>
<script type="text/javascript">
    function toggleIcon(e) {
        $(e.target)
            .toggleClass('glyphicon-chevron-right glyphicon-chevron-down');
    }
    $('.more-less').on('hidden.bs.collapse', toggleIcon);
    $('.more-less').on('shown.bs.collapse', toggleIcon);
</script>
