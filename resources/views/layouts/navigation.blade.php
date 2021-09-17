<div class="modal fade" id="closeRegId" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">@lang('site.warning')</h4>
            </div>
            <div class="modal-body">
                <p>@lang('site.close_your_register_first_to_logout')</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('site.close')</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
<div id="sidebarspecialdiv" class="app app-header-fixed">
    <header id="header" class="app-header navbar" role="menu">
        <!-- navbar header -->
        <div class="navbar-header bg-dark">
            <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
                <i class="glyphicon glyphicon-cog"></i>
            </button>
            <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
                <i class="glyphicon glyphicon-align-justify"></i>
            </button>
            <!-- brand -->
            <a class="navbar-brand">
                <!-- <i class="fa fa-tachometer"></i>
<img src="{{ CustomUrl::asset('img/logo.png')}}" alt="." class="hide">
<span class="hidden-folded m-l-xs">NEXTAXE</span> -->
                @if (!empty(Auth::user()->store->store_logo))
                <img src="{{ Auth::user()->store->store_logo }}" alt="Misssing Store Logo" style="object-fit: cover;
    /* width: 98px; */
    /* max-width: 97px; */
    max-height: 60px;
    margin-left: -6px;"> @else
                <img src="{{ CustomUrl::asset('img/nextaxe_logo.png')}}" alt="." style="max-height: 58px!important; margin-left: -29px !important;"> @endif

            </a>
            <!-- / brand -->
        </div>
        <!-- / navbar header -->
        <!-- navbar collapse -->
        <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
            <!-- buttons -->
            <div class="nav navbar-nav hidden-xs">
                <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
                    <i class="fa fa-dedent fa-fw text"></i>
                    <i class="fa fa-indent fa-fw text-active"></i>
                </a>
            </div>
            <!-- / buttons -->
            <!-- link and dropdown -->
            <!-- / link and dropdown -->
            <!-- search form -->
            <!-- / search form -->
            <!-- nabar right -->
            <ul class="nav navbar-nav navbar-right">
                @if( Auth::user()->owner == 1 )
                <li class="dropdown"> 
                    <!-- / dropdown -->
                    <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
                        <span class="hidden-sm hidden-md">{{Auth::user()->store->name}}</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        @if(!empty($all_stores) && $all_stores->count() > 0)
                            <li class="@lang('site.lang')">
                                <a href="{{url('multistore/list')}}" >@lang('site.Stores_list')</a>
                            </li>
                            @foreach($all_stores as $key => $value)
                            <li class="@lang('site.lang')">
                                <a href="" onClick="viewStore({{$key}})">{{$value}}</a>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </li>
                @endif
                <li class="dropdown">
                    <!-- / dropdown -->
                    <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
                        <span class="hidden-sm hidden-md">@lang('site.change_language')</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="@lang('site.lang')">
                            <a href="{{ route('user.language', ['lang' => 'en']) }}">@lang('site.english')</a>
                        </li>
                        <li class="@lang('lang')">
                            <a href="{{ route('user.language', ['lang' => 'ar']) }}">@lang('site.arabic')</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <!-- / dropdown -->
                    @if (Auth::guest())
                    <a href="{{ route('login') }}">@lang('site.login')</a> @else
                    <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
                    @if (Auth::user()->user_image == null)
                    <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                    <img src="{{ CustomUrl::asset('img/a0.jpg')}}" alt="..."><i class="on md b-white bottom"></i>
                    </span>
                    @else
                    <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                    <img style="width: 40px !important; height: 40px !important" src="{{Auth::user()->user_image}}" alt="..."><i class="on md b-white bottom"></i>
                    </span>
                    @endif
                    <span class="hidden-sm hidden-md">{{ Auth::user()->name }} </span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <!-- <li>
<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
@lang('site.logout')
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
</li> -->
                        <li>
                            <a href="{{url('users/edit_user')}}?id={{Auth::user()->id}}">@lang('site.profile')</a>
                        </li>
                        <li>
                            <!-- <a id="logout_button" onclick="$('#logout-form').submit()">@lang('site.logout')</a> -->
                            <a id="logout_button">@lang('site.logout')</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    @endif
                </li>
            </ul>
            <!-- / navbar right -->
        </div>
        <!-- / navbar collapse -->
    </header>
    <!-- / header -->
    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs2 bg-dark fixed">
        <div class="aside-wrap">
            <div class="navi-wrap" style="min-height:600px;">
                <!-- user -->
                <!-- / user -->
                <!-- nav --> 
                {{--
                @if(Auth::user()->store_id != null)

                     @if(Auth::user()->store->subscription)
                         @php
                            $items = Auth::user()->store->subscription->subscription_items;
                            $ecom = false;
                            $cat = false;
                            $sell = false;
                        @endphp
                        @foreach($items as $item)
                                <!-- <li >{{$item->module->id}}</li> -->
                                @if($item->module->id == 2)
                                    @php
                                     $ecom = true;
                                    @endphp
                                @endif
                                @if($item->module->id == 3)
                                    @php
                                     $cat = true;
                                    @endphp
                                @endif
                                @if($item->module->id == 1)
                                    @php
                                     $sell = true;
                                    @endphp
                                @endif
                            @endforeach
                    @else
                        @php
                            
                            $ecom = false;
                            $cat = false;
                            $sell = false;
                        @endphp
                    @endif
                @else
                    @php 
                        $ecom = false;
                        $cat = false;
                        $sell = false;
                    @endphp
                @endif
                --}}

                @php 
                    $ecom = true;
                    $cat = true;
                    $sell = true;
                @endphp

                    
                <nav ui-nav class="navi clearfix">
                    <ul class="nav">
                        @php $user = Auth::user(); @endphp @if(!is_null($user) && $user->can('dashboard_dashboard'))
                        <li>
                            <a href="{{ url('/') }}" class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="glyphicon glyphicon-th color1"></i>
                                <span>@lang('site.dashboard')</span>
                            </a>
                        </li>
                        @endif
                        @if(!is_null($user) && $user->can('sell_sell_and_open_close'))
                        @if($sell == true)
                        <li class="line dk"></li>
                        <li>
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-tasks color2"></i>
                                <span>@lang('site.sell')</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                @if(!is_null($user) && $user->can('sell_sell_and_open_close'))
                                <li>
                                    <a href="{{url('sale#/main')}}">
                                        <span>@lang('site.sell')</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('registerbook') }}">
                                        <span>@lang('site.open/close_register')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('sell_sell_and_open_close') && $user->can('cash_management_list'))
                                <li>
                                    <a href="{{url('cash-management') }}">
                                        <span>@lang('site.cash_management')</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                         @endif
                        @endif
                        <li class="line dk"></li>
                        @if(!is_null($user) && $user->can('sales_ledger_sales_ledger'))
                        <li>
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-file-text-o color3"></i>
                                <span>@lang('site.sales_ledger')</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <li>
                                    <a href="{{route('sale.history') }}">
                                        <span>@lang('site.sales_ledger')</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="line dk"></li>
                        @endif @if(!is_null($user) && ( $user->can('reporting_sales_report') || $user->can('reporting_inventory_report') || $user->can('reporting_payment_report') || $user->can('reporting_register_closure') ))

                        <li>
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-pie-chart color4"></i>
                                <span>@lang('site.reporting')</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                @if(!is_null($user) && $user->can('reporting_sales_report'))
                                <li>
                                    <a href="{{ url('sales_report') }}">
                                        <span>@lang('site.sales_reports')</span>
                                    </a>
                                </li>

                                <!-- <li>
                                    <a href="{{ url('my_sales_report') }}">
                                        <span>My Sales Report</span>
                                    </a>
                                </li> -->

                                @endif @if(!is_null($user) && $user->can('reporting_inventory_report'))
                                <li>
                                    <a href="{{ url('inventory_report') }}">
                                        <span>@lang('site.inventory_reports')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('reporting_payment_report'))
                                <li>
                                    <a href="{{ url('payment_report') }}">
                                        <span>@lang('site.payment_reports')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('reporting_register_closure'))
                                <li>
                                    <a href="{{ url('register_closure') }}">
                                        <span>@lang('site.register_closure')</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li class="line dk"></li>
                        @endif @if(!is_null($user) && ( $user->can('product_list') || $user->can('product_type_list') || $user->can('supplier_list') || $user->can('brand_list') || $user->can('product_tag_list') || $user->can('view_Stock') ))

                        <li>
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="glyphicon glyphicon-list color5"></i>
                                <span>@lang('site.product_management')</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                @if(!is_null($user) && $user->can('product_list'))
                                <li>
                                    <a href="{{ url('product') }}">
                                        <span>@lang('site.product')</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('catalogue/import/products') }}">
                                        <span>Import Products</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="{{ url('catalogue/add_on') }}">
                                        <span>Add-On</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('view_Stock'))
                                <li>
                                    <a href="{{ route('purchase.orders') }}" class="auto">
                                        <span>@lang('site.stock_control')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('product_type_list'))
                                <li>
                                    <a href=" {{ url('catalogue/category') }} ">
                                        <span>@lang('site.product_type')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('supplier_list'))
                                <li>
                                    <a href=" {{ url('supplier') }} ">
                                        <span>@lang('site.supplier')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('brand_list'))
                                <li>
                                    <a href="{{ url('catalogue/brand') }}">
                                        <span>@lang('site.brands')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('product_tag_list'))
                                <li>
                                    <a href="{{ url('tag') }}">
                                        <span>@lang('site.product_tags')</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li class="line dk"></li>
                        @endif @if(!is_null($user) && ( $user->can('customer_list') || $user->can('customer_group_list') ))
                        <li>
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-users color3"></i>
                                <span>@lang('site.customers')</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                @if(!is_null($user) && $user->can('customer_list'))
                                <li>
                                    <a href="{{ url('customer') }}">
                                        <span>@lang('site.customers')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('customer_group_list'))
                                <li>
                                    <a href="{{ url('customer_group') }}">
                                        <span>@lang('site.customer_groups')</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li class="line dk"></li>
                        @endif @if(!is_null($user)&& ( $user->can('accounts_summary') || $user->can('income_head_list') || $user->can('income_ledger_list')|| $user->can('expense_head_list')|| $user->can('expense_ledger_list') ))
                        <li>
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-user color2"></i>
                                <span>@lang('site.accounts')</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                @if(!is_null($user) && $user->can('accounts_summary'))
                                <li>
                                    <a href="{{ url('accounts') }}">
                                        <span>@lang('site.accounts')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('income_head_list'))
                                <li>
                                    <a href="{{ url('incomehead') }}">
                                        <span>@lang('site.accounthead')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('income_ledger_list'))
                                <li>
                                    <a href="{{ url('incomeledger') }}">
                                        <span>@lang('site.incomeledger')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('expense_head_list'))
                                <li>
                                    <a href="{{ url('expensehead') }}">
                                        <span>@lang('site.expensehead')</span>
                                    </a>
                                </li>
                                @endif @if(!is_null($user) && $user->can('expense_ledger_list'))
                                <li>
                                    <a href="{{ url('expenseledger') }}">
                                        <span>@lang('site.expenseledger')</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        {{--
                            <li class="line dk"></li>
                        @endif @if(!is_null($user) && $user->can('invoices'))
                        <li>
                            <a href="{{ url('invoices') }}" class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="glyphicon glyphicon-list-alt color6"></i>
                                <span>@lang('site.Invoices')</span>
                            </a>
                        </li>
                            --}}
                        <li class="line dk"></li>
                        @endif @if(!is_null($user) && ( $user->can('general_setup_edit') || $user->can('outlet_list') || $user->can('user_list') || $user->can('roles_list') ))
                        <li>
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-gear color2"></i>
                                <span>@lang('site.setup')</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                @if(!is_null($user) && $user->can('general_setup_edit'))
                                <li><a href="{{ route('general') }}"><span>@lang('site.general')</span></a></li>
                                @endif @if(!is_null($user) && $user->can('outlet_list'))
                                <li><a href="{{ url('outlet') }}"><span>@lang('site.outlets_and_registers')</span></a></li>
                                @endif @if(!is_null($user) && $user->can('user_list'))
                                <li><a href="{{ url('users') }}"><span>@lang('site.user_management')</span></a></li>
                                @elseif(!is_null($user) && $user->can('roles_list'))
                                <li><a href="{{ url('users') }}"><span>@lang('site.roles')</span></a></li>
                                @endif
                            </ul>
                        </li>

                        {{--
                        <li>
                            <a href class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-laptop color2"></i>
                                <span>Subscription</span>
                            </a>
                            <ul class="nav nav-sub dk">
                                <!-- <li><a href="{{ url('packages') }}"><span>Store Subscription</span></a></li> -->
                                <li><a href="{{ url('subscription_list') }}"><span>Subscription History</span></a></li>
                                 <li><a href="{{ url('subscription_payments') }}"><span>Subscription Payments</span></a></li>

                            </ul>
                        </li>
                        --}}

                    
                        @endif @if(!is_null($user) && ( $user->can('ecommerce_setup_edit') || $user->can('product_web_list') || $user->can('shipping_web_list') || $user->can('payment_web_list') || $user->can('order_web_management_list') || $user->can('web_settings_list') ))
                            @if($ecom == true)
                        <li class="line dk"></li>
                        <li>
                     
                            <a href="{{ route('site.dashboard') }}" class="auto">
                                <span class="pull-right text-muted">
                                <i class="fa fa-fw fa-angle-right text"></i>
                                <i class="fa fa-fw fa-angle-down text-active"></i>
                                </span>
                                <i class="fa fa-shopping-cart color5"></i>
                                <span> @lang('site.ecommerce')</span>
                            </a>
                    @endif
                    @if($cat == true)
                            <li class="line dk"></li>
                            <li>
                                <a href="{{ route('dineinmodule.dashboard') }}" class="auto">
                                    <span class="pull-right text-muted">
                                    <i class="fa fa-fw fa-angle-right text"></i>
                                    <i class="fa fa-fw fa-angle-down text-active"></i>
                                    </span>
                                    <i class="fa fa-mobile color6"></i>
                                    <span> @lang('site.Dinein')</span>
                                </a>
                        </li>
                    @endif
                    @endif
                    </ul>
                </nav>
                <!-- nav -->
                <!-- aside footer -->
                <!-- / aside footer -->
            </div>
        </div>
    </aside>
    <!-- / aside -->
    <!-- response message -->
    @if (session('done'))
    <div class="alert-s" style="display:none">
        {{ session('done') }}
    </div>
    @elseif(session('error'))
    <div class="alerte" style="display:none">
        {{ session('error') }}
    </div>
    @endif
    <!-- response message -->