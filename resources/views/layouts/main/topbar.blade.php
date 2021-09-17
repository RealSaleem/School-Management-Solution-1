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
                <img src="{{ Auth::user()->store->store_logo }}" alt="Misssing Store Logo" style="max-height: 57px; margin-left: -29px;"> @else
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
{{--                            <a href="{{ route('user.language', ['lang' => 'en']) }}">@lang('site.english')</a>--}}
                        </li>
                        <li class="@lang('lang')">
{{--                            <a href="{{ route('user.language', ['lang' => 'ar']) }}">@lang('site.arabic')</a>--}}
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
