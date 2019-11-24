<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/admetro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 04:32:35 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Admetro | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="{{ asset("assets/css/app.min.css") }}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<header id="header" class="app-header">
			<!-- BEGIN navbar-toggle-minify -->
			<button type="button" class="navbar-toggle navbar-toggle-minify" data-click="sidebar-minify">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- END navbar-toggle-minify -->
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index-2.html" class="navbar-brand">
					admetro
				</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN navbar-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="nav-item">
					<a href="#" data-toggle="search-bar" class="nav-link">
						<i class="fa fa-search nav-icon"></i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
						<i class="far fa-bell nav-icon"></i>
						<span class="nav-label">3</span>
					</a>
					<ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0 pb-0">
						<li class="dropdown-header"><a href="#" class="dropdown-close">&times;</a>Today</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fab fa-apple bg-primary"></i></div>
								<div class="info">
									<h4 class="title">App Store <span class="time">Just now</span></h4>
									<p class="desc">Your iOS application has been approved</p>
								</div>
							</a>
						</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fab fa-android bg-success"></i></div>
								<div class="info">
									<h4 class="title">Google Play <span class="time">5 min ago</span></h4>
									<p class="desc">Your android application has been approved</p>
								</div>
							</a>
						</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fab fa-github bg-muted"></i></div>
								<div class="info">
									<h4 class="title">Github  <span class="time">12 min ago</span></h4>
									<p class="desc">Error with notifications from Private Repos</p>
								</div>
							</a>
						</li>
						<li class="dropdown-header"><a href="#" class="dropdown-close">&times;</a>Yesterday</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fa fa-envelope bg-purple"></i></div>
								<div class="info">
									<h4 class="title">Gmail  <span class="time">12:50pm</span></h4>
									<p class="desc">You have 2 unread email</p>
								</div>
							</a>
						</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><div class="img" style="background-image: url(assets/img/user-2.jpg)"></div></div>
								<div class="info">
									<h4 class="title">Corey  <span class="time">10:20am</span></h4>
									<p class="desc">There's so much room for activities!</p>
								</div>
							</a>
						</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fab fa-twitter bg-gradient-aqua"></i></div>
								<div class="info">
									<h4 class="title">Twitter  <span class="time">12:50pm</span></h4>
									<p class="desc">@sergiolucas: Most rain in the last two days: 85mm Gabo Island (March)</p>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
						<i class="fa fa-cog nav-icon"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-right dropdown-menu-md pt-0 pb-0">
						<li class="dropdown-header">Notifications Settings</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-envelope text-muted"></i></div>
							<div class="info">Email</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_1" id="setting_1" checked />
									<label for="setting_1"></label>
								</div>
							</div>
						</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-desktop text-muted"></i></div>
							<div class="info">Desktop & Mobile</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_2" id="setting_2" checked />
									<label for="setting_2"></label>
								</div>
							</div>
						</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-comment-alt text-muted"></i></div>
							<div class="info">Text message</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_3" id="setting_3" />
									<label for="setting_3"></label>
								</div>
							</div>
						</li>
						<li class="dropdown-header">Privacy Settings</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-list-ul text-muted"></i></div>
							<div class="info">Public friends list</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_4" id="setting_4" />
									<label for="setting_4"></label>
								</div>
							</div>
						</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-user-secret text-muted"></i></div>
							<div class="info">Public profile page</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_5" id="setting_5" checked />
									<label for="setting_5"></label>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
						<span class="nav-img online">
							<img src="assets/img/user.jpg" alt="" />
						</span>
						<span class="d-none d-md-block">John Smith <b class="caret"></b></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Edit Profile</a>
						<a class="dropdown-item" href="#">Inbox</a>
						<a class="dropdown-item" href="#">Calendar</a>
						<a class="dropdown-item" href="#">Setting</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt"></i> Log Out</a>
					</div>
				</li>
			</ul>
			<!-- END navbar-nav -->
			<!-- BEGIN navbar-search -->
			<div class="navbar-search">
				<form action="#" method="POST" name="navbar_search_form">
					<div class="form-group">
						<div class="icon"><i class="fa fa-search"></i></div>
						<input type="text" class="form-control" id="header-search" placeholder="Search admetro..." />
						<div class="icon">
							<a href="#" data-dismiss="search-bar" class="right-icon"><i class="fa fa-times"></i></a>
						</div>
					</div>
				</form>
			</div>
			<!-- END navbar-search -->
		</header>
		<!-- END #header -->
		

		<sidebar id="sidebar" class="app-sidebar">
			<div data-scrollbar="true" data-height="100%">
				<ul class="nav">
					<li class="nav-profile">
						<div class="profile-img">
							<img src="assets/img/user.jpg" />
						</div>
						<div class="profile-info">
							<h4>John Smith</h4>
							<p>Frontend Developer</p>
						</div>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Navigation</li>
					<li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
						<a href="{{ url('/dashboard') }}">
							<span class="nav-icon"><i class="fa fa-th-large bg-gradient-success text-white"></i></span>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li class="{{ (request()->is('users')) ? 'active' : '' || (request()->is('users/create')) ? 'active' : '' }}">
						<a href="{{ url('/users') }}">
							<span class="nav-icon"><i class="fa fa-users bg-gradient-purple text-white"></i></span>
							<span class="nav-text">User Management</span>
						</a>
					</li >
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-envelope"></i> </span>
							<span class="nav-text">Email <span class="nav-label">20+</span></span>
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">
							<li><a href="email_inbox.html">Inbox</a></li>
							<li><a href="email_compose.html">Compose</a></li>
							<li><a href="email_detail.html">Detail</a></li>
						</ul>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Components</li>
					<li>
						<a href="widgets.html">
							<span class="nav-icon"><i class="fa fa-qrcode bg-gradient-red text-white"></i></span>
							<span class="nav-text">Widgets</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-heart bg-gradient-orange text-white"></i></span>
							<span class="nav-text">UI Kits</span> 
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">
							<li><a href="ui_bootstrap.html"><span class="nav-text">Bootstrap</span></a></li>
							<li><a href="ui_buttons.html"><span class="nav-text">Buttons</span></a></li>
							<li><a href="ui_typography.html"><span class="nav-text">Typography</span></a></li>
							<li><a href="ui_tabs_accordions.html"><span class="nav-text">Tabs & Accordions</span></a></li>
							<li><a href="ui_modal_notification.html"><span class="nav-text">Modal & Notification</span></a></li>
							<li><a href="ui_card.html"><span class="nav-text">Card</span></a></li>
							<li><a href="ui_icons.html"><span class="nav-text">Icons</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-file-alt bg-gradient-orange text-white"></i></span>
							<span class="nav-text">Forms</span> 
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">
							<li><a href="form_elements.html"><span class="nav-text">Form Elements</span></a></li>
							<li><a href="form_plugins.html"><span class="nav-text">Form Plugins</span></a></li>
							<li><a href="form_wizards.html"><span class="nav-text">Wizards</span></a></li>
							<li><a href="form_jquery_file_upload.html"><span class="nav-text">File Upload</span></a></li>
							<li><a href="form_summernote.html"><span class="nav-text">Summernote</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-table bg-gradient-green text-white"></i></span>
							<span class="nav-text">Tables</span>
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">
							<li><a href="table_basic.html"><span class="nav-text">Basic Tables</span></a></li>
							<li><a href="table_data.html"><span class="nav-text">DataTables</span></a></li>
						</ul>
					</li>
					<li>
						<a href="chart.html">
							<span class="nav-icon"><i class="fa fa-chart-bar bg-gradient-purple text-white"></i></span>
							<span class="nav-text">Chart</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-map-marker-alt bg-gradient-blue text-white"></i></span>
							<span class="nav-text">Map</span>
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">
							<li><a href="map_vector.html"><span class="nav-text">Vector Map</span></a></li>
							<li><a href="map_google.html"><span class="nav-text">Google Map</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-code-branch"></i></span>
							<span class="nav-text">Layout</span>
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">
							<li><a href="layout_starter.html"><span class="nav-text">Starter Page</span></a></li>
							<li><a href="layout_fixed_footer.html"><span class="nav-text">Fixed Footer</span></a></li>
							<li><a href="layout_full_width.html"><span class="nav-text">Full Width</span></a></li>
							<li><a href="layout_boxed_layout.html"><span class="nav-text">Boxed Layout</span></a></li>
							<li><a href="layout_full_height.html"><span class="nav-text">Full Height</span></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-globe"></i></span>
							<span class="nav-text">Pages</span>
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">
							<li><a href="page_gallery.html"><span class="nav-text">Gallery</span></a></li>
							<li><a href="page_coming_soon.html"><span class="nav-text">Coming Soon Page</span></a></li>
							<li><a href="page_search_results.html"><span class="nav-text">Search Results</span></a></li>
							<li><a href="page_404_error.html"><span class="nav-text">404 Error Page</span></a></li>
							<li><a href="page_login.html"><span class="nav-text">Login</span></a></li>
							<li><a href="page_register.html"><span class="nav-text">Register</span></a></li>
						</ul>
					</li>
					<li class="nav-divider"></li>
					<li class="nav-header">Users</li>
					<li>
						<a href="profile.html">
							<span class="nav-icon"><i class="fa fa-user-circle"></i></span>
							<span class="nav-text">Profile</span>
						</a>
					</li>
					<li>
						<a href="calendar.html">
							<span class="nav-icon"><i class="fa fa-calendar"></i></span>
							<span class="nav-text">Calendar</span>
						</a>
					</li>
					<li>
						<a href="settings.html">
							<span class="nav-icon"><i class="fa fa-cog"></i></span>
							<span class="nav-text">Settings</span>
						</a>
					</li>
					<li>
						<a href="helper.html">
							<span class="nav-icon"><i class="fa fa-sign-out-alt"></i></span>
							<span class="nav-text">Log Out</span>
						</a>
					</li>
					<li class="nav-divider"></li>

					<li class="nav-copyright">&copy; 2019 seanTheme All Right Reserved</li>
				</ul>
			</div>
		</sidebar>
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN page-header -->

			@yield('content')

			<!-- END row -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- BEGIN theme-panel -->

	<!-- END theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset("/assets/js/app.min.js") }}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset("/assets/js/demo/dashboard.demo.js") }}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
{{-- 	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script> --}}
</body>

<!-- Mirrored from seantheme.com/admetro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 04:32:35 GMT -->
</html>