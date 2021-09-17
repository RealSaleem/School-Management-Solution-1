<aside id="aside" class="app-aside hidden-xs bg-dark fixed">
        <div class="aside-wrap">
            <div class="navi-wrap" style="min-height:600px;">
                <!-- user -->
                <!-- / user -->
                <!-- nav --> 
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
                        @endif 
                        @if(!is_null($user) && ( $user->can('reporting_sales_report') || $user->can('reporting_inventory_report') || $user->can('reporting_payment_report') || $user->can('reporting_register_closure') ))
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
                        @endif 
                        @if(!is_null($user) && ( $user->can('product_list') || $user->can('product_type_list') || $user->can('supplier_list') || $user->can('brand_list') || $user->can('product_tag_list') || $user->can('view_Stock') ))
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
                        @endif 
                        @if(!is_null($user) && ( $user->can('customer_list') || $user->can('customer_group_list') ))
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
                        @endif 
                        @if(!is_null($user)&& ( $user->can('accounts_summary') || $user->can('income_head_list') || $user->can('income_ledger_list')|| $user->can('expense_head_list')|| $user->can('expense_ledger_list') ))
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
                        @endif 
                        @if(!is_null($user) && $user->can('invoices'))
                         {{--
                        <li class="line dk"></li>
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
                        @endif 
                        @if(!is_null($user) && ( $user->can('general_setup_edit') || $user->can('outlet_list') || $user->can('user_list') || $user->can('roles_list') ))
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
                        @endif 
                           
                        {{--
                        <li class="line dk"></li>
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

                    
                        @if(!is_null($user) && ( $user->can('ecommerce_setup_edit') || $user->can('product_web_list') || $user->can('shipping_web_list') || $user->can('payment_web_list') || $user->can('order_web_management_list') || $user->can('web_settings_list') ))
                            
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
                        </li>
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