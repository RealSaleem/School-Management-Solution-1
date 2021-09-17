<div class="left_side_menu_1">
	<!-- aside -->
	<aside id="aside" class="app-aside hidden-xs bg-light border-right">
		<a href="#" class="menu-toogler" ui-toggle-class="app-aside-folded" target=".app">
		<i class="icon-menu text"></i>
		<i class="icon-menu text-active"></i>
		</a>
		<div class="aside-wrap">
			<div class="navi-wrap">
				<!-- user -->
				<!-- / user -->
				<!-- nav -->
				<nav ui-nav class="navi clearfix">
					<span class="btn-block text-center mt-3">
					<img src="{{ CustomUrl::asset('img/logo.png') }}" class="img-responsive p-2 biglogo">
					<img src="{ CustomUrl::asset('img/logo-icon.png') }}" class="mt-3 mb-3 smalllogo">
					</span>
					<ul class="nav">
						<li>
							<a href class="auto" title="Dashboard">      
							<span class="pull-right text-muted">
							<i class="fa fa-fw fa-angle-right text"></i>
							<i class="fa fa-fw fa-angle-down text-active"></i>
							</span>
							<i class="icon-grid"></i>
							<span>Dashboard</span>
							</a>
							<ul class="nav nav-sub dk">
								<li>
									<a href="{{url('backoffice/dashboard')}}">
									<span>Dashboard </span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href class="auto" title="Catalogue">      
							<i class="icon-notebook"></i>
							<span>Catalogue</span>
							</a>
							<ul class="nav nav-sub dk">
								<li>
									<a href="{{route('backoffice.category')}}">
									<span>Categories</span>
									</a>
								</li>
								<li>
									<a href="{{route('backoffice.brand')}}">
									<span>Brands</span>
									</a>
								</li>
								<li>
									<a href="{{route('backoffice.product')}}">
									<span>Product</span>
									</a>
								</li>
								<li>
									<a href="{{route('backoffice.import')}}">
									<span>Import Product</span>
									</a>
								</li>
								<li>
									<a href="{{route('backoffice.supplier')}}">
									<span>Supplier</span>
									</a>
								</li>
								<li>
									<a href="{{url('backoffice/stock/list')}}">
									<span>Stock Control</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href class="auto" title="Products">      
							<i class="icon-grid"></i>
							<span>Products</span>
							</a>
							<ul class="nav nav-sub dk">
								<li>
									<a href="#">
									<span>POS  </span>
									</a>
									<ul>
										<li>
											<a href="#">
											<span>Sell  </span>
											</a>
										</li>
										<li>
											<a href="#">
											<span>Sales Ledger  </span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
									<span>Ecommerce  </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span>Dinein  </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span>Invoices  </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span>Accounts  </span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href class="auto" title="Customer's">      
							<i class="icon-people"></i>
							<span>Customer's</span>
							</a>
							<ul class="nav nav-sub dk">
								<li>
									<a href="{{route('backoffice.customer')}}">
									<span>Customer's</span>
									</a>
								</li>
								<li>
									<a href="{{route('backoffice.customergroup')}}">
									<span>Customer's Group</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href class="auto" title="Customers">
							<i class="icon-trash"></i>
							<span>Subscription</span>
							</a>
						</li>
						<li>
							<a href="#" class="auto" title="Reporting">
							<i class="icon-notebook"></i>
							<span>Reporting </span>
							</a>
							<ul class="nav nav-sub dk">
								<li >
									<a href="products.html">
									<span>Filters</span>
									</a>
								</li>
								<li>
									<a href="supplers.html">
									<span>Important Basic</span>
									</a>
								</li>
								<li>
									<a href="inventry.html">
									<span>Advance Reports</span>
									</a>
								</li>
							</li>
						</ul>
					</nav>
				<!-- nav -->
				<!-- aside footer -->
				<!-- / aside footer -->
			</div>
		</div>
		<div class="bottomMenu app-aside-folded">
			<ul>
				<li class="settings dropbottom ">
					<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Setup">
					<i class="icon-settings color3"></i>
					<span>Setup</span></a>
					<div class="dropdown-menu">
						<ul >
							<li><a href="">Languages</a></li>
							<li><a href="">Settings</a></li>
							<li><a href="">Settings</a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href class="auto" title="Notification">
					<i class="icon-screen-desktop color2"></i>
					<span>Notification</span>
					</a>
				</li>
				<li class="dropbottom ">
					<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Setup">
					<i class="icon-user color1"></i>
					<span>Profile</span>
					</a>
					<div class="dropdown-menu">
						<ul>
							<li><a href="">My Accounts</a></li>
							<li><a href="">Settings</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</aside>
	<!-- / aside -->
</div>