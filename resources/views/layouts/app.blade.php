<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>Home</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	{{-- <link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">--}}

	 {{-- <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script> --}}
	 <script
  src="https://code.jquery.com/jquery-1.11.1.js"
  integrity="sha256-MCmDSoIMecFUw3f1LicZ/D/yonYAoHrgiep/3pCH9rw="
  crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


	<link href="{{asset('css/app.css')}}" rel="stylesheet">

	<link href="{{asset('css/libs.css')}}" rel="stylesheet">


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body" id="app-layout">

	<nav class="navbar horizontal-menu "><!-- set fixed position by adding class "navbar-fixed-top" -->

		<div class="navbar-inner">

			<!-- Navbar Brand -->
			<div class="navbar-brand">
				<a href={{ url('/')}} class="logo">
					<img src="assets/images/logo-white-bg@2x.png" width="80" alt="" class="hidden-xs" />
					<img src="assets/images/logo@2x.png" width="80" alt="" class="visible-xs" />
				</a>
			</div>

			<div class="navbar-mobile-clear"></div>



			<!-- main menu -->

			<ul class="navbar-nav">
        @if (Auth::guest())
        <li>
					<a href="{{ url('/home')}}">
						<span class="title">Home</span>
					</a>
				</li>
        @else
          <li>
  					<a href="#">
  						<i class="linecons-cog"></i>
  						<span class="title">Ma auto école</span>
  					</a>
  					<ul>
  						<li>
  							<a href="#">
  								<span class="title">Personnels</span>
  							</a>

							<ul>
								<li>
									<a href="{{url('/personnel')}}">
										<i class="entypo-flow-parallel"></i>
										<span class="title">Liste Personnel</span>
									</a>
								</li>
							</ul>

							<ul>
								<li>
									<a href="{{url('/personnel/create')}}">
										<i class="entypo-flow-parallel"></i>
										<span class="title">Créer Personnel</span>
									</a>
								</li>
							</ul>
  						</li>
  						<li>
  							<a href="dashboard-2.html">
  								<span class="title">Vehicules</span>
  							</a>
  						</li>
  					</ul>
  				</li>
          <li>
					<a href="#">
						<i class="linecons-desktop"></i>
						<span class="title">Candidats</span>
					</a>
					<ul>
						<li>
							<a href="{{url('/candidat')}}">
								<span class="title">Fiche</span>
							</a>
						</li>
						<li>
							<a href="layout-collapsed-sidebar.html">
								<span class="title">to be determined</span>
							</a>
						</li>
					</ul>
				</li>
        <li>
					<a href="ui-panels.html">
						<i class="linecons-note"></i>
						<span class="title">Cours</span>
					</a>
					<ul>
						<li>
							<a href="ui-panels.html">
								<span class="title">Panels</span>
							</a>
						</li>
						<li>
							<a href="ui-buttons.html">
								<span class="title">Buttons</span>
							</a>
						</li>
						<li>
							<a href="ui-tabs-accordions.html">
								<span class="title">Tabs &amp; Accordions</span>
							</a>
						</li>
						<li>
							<a href="ui-modals.html">
								<span class="title">Modals</span>
							</a>
						</li>
						<li>
							<a href="ui-breadcrumbs.html">
								<span class="title">Breadcrumbs</span>
							</a>
						</li>
						<li>
							<a href="ui-blockquotes.html">
								<span class="title">Blockquotes</span>
							</a>
						</li>
						<li>
							<a href="ui-progressbars.html">
								<span class="title">Progress Bars</span>
							</a>
						</li>
						<li>
							<a href="ui-navbars.html">
								<span class="title">Navbars</span>
							</a>
						</li>
						<li>
							<a href="ui-alerts.html">
								<span class="title">Alerts</span>
							</a>
						</li>
						<li>
							<a href="ui-pagination.html">
								<span class="title">Pagination</span>
							</a>
						</li>
						<li>
							<a href="ui-typography.html">
								<span class="title">Typography</span>
							</a>
						</li>
						<li>
							<a href="ui-other-elements.html">
								<span class="title">Other Elements</span>
							</a>
						</li>
					</ul>
				</li>
        <li>
					<a href="forms-native.html">
						<i class="linecons-params"></i>
						<span class="title">Examens</span>
					</a>
					<ul>
						<li>
							<a href="forms-native.html">
								<span class="title">Native Elements</span>
							</a>
						</li>
						<li>
							<a href="forms-advanced.html">
								<span class="title">Advanced Plugins</span>
							</a>
						</li>
						<li>
							<a href="forms-wizard.html">
								<span class="title">Form Wizard</span>
							</a>
						</li>
						<li>
							<a href="forms-validation.html">
								<span class="title">Form Validation</span>
							</a>
						</li>
						<li>
							<a href="forms-input-masks.html">
								<span class="title">Input Masks</span>
							</a>
						</li>
						<li>
							<a href="forms-file-upload.html">
								<span class="title">File Upload</span>
							</a>
						</li>
						<li>
							<a href="forms-editors.html">
								<span class="title">Editors</span>
							</a>
						</li>
						<li>
							<a href="forms-sliders.html">
								<span class="title">Sliders</span>
							</a>
						</li>
					</ul>
				</li>
        <li>
					<a href="">
						<i class="linecons-diamond"></i>
						<span class="title">Ma Finance</span>
					</a>
					<ul>
						<li>
							<a href="ui-widgets.html">
								<i class="linecons-star"></i>
								<span class="title">Widgets</span>
							</a>
						</li>
						<li>
							<a href="mailbox-main.html">
								<i class="linecons-mail"></i>
								<span class="title">Mailbox</span>
								<span class="label label-success pull-right">5</span>
							</a>
							<ul>
								<li>
									<a href="mailbox-main.html">
										<span class="title">Inbox</span>
									</a>
								</li>
								<li>
									<a href="mailbox-compose.html">
										<span class="title">Compose Message</span>
									</a>
								</li>
								<li>
									<a href="mailbox-message.html">
										<span class="title">View Message</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="tables-basic.html">
								<i class="linecons-database"></i>
								<span class="title">Tables</span>
							</a>
							<ul>
								<li>
									<a href="tables-basic.html">
										<span class="title">Basic Tables</span>
									</a>
								</li>
								<li>
									<a href="tables-responsive.html">
										<span class="title">Responsive Table</span>
									</a>
								</li>
								<li>
									<a href="tables-datatables.html">
										<span class="title">Data Tables</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="extra-gallery.html">
								<i class="linecons-beaker"></i>
								<span class="title">Extra</span>
								<span class="label label-purple pull-right hidden-collapsed">New Items</span>
							</a>
							<ul>
								<li>
									<a href="extra-icons-fontawesome.html">
										<span class="title">Icons</span>
									</a>
									<ul>
										<li>
											<a href="extra-icons-fontawesome.html">
												<span class="title">Font Awesome</span>
											</a>
										</li>
										<li>
											<a href="extra-icons-linecons.html">
												<span class="title">Linecons</span>
											</a>
										</li>
										<li>
											<a href="extra-icons-elusive.html">
												<span class="title">Elusive</span>
											</a>
										</li>
										<li>
											<a href="extra-icons-meteocons.html">
												<span class="title">Meteocons</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="extra-maps-google.html">
										<span class="title">Maps</span>
									</a>
									<ul>
										<li>
											<a href="extra-maps-google.html">
												<span class="title">Google Maps</span>
											</a>
										</li>
										<li>
											<a href="extra-maps-advanced.html">
												<span class="title">Advanced Map</span>
											</a>
										</li>
										<li>
											<a href="extra-maps-vector.html">
												<span class="title">Vector Map</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="extra-members-list.html">
										<span class="title">Members</span>
										<span class="label label-warning pull-right">New</span>
									</a>
									<ul>
										<li>
											<a href="extra-members-list.html">
												<span class="title">Members List</span>
											</a>
										</li>
										<li>
											<a href="extra-members-add.html">
												<span class="title">Add Member</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="extra-gallery.html">
										<span class="title">Gallery</span>
									</a>
								</li>
								<li>
									<a href="extra-calendar.html">
										<span class="title">Calendar</span>
									</a>
								</li>
								<li>
									<a href="extra-profile.html">
										<span class="title">Profile</span>
									</a>
								</li>
								<li>
									<a href="extra-login.html">
										<span class="title">Login</span>
									</a>
								</li>
								<li>
									<a href="extra-lockscreen.html">
										<span class="title">Lockscreen</span>
									</a>
								</li>
								<li>
									<a href="extra-login-light.html">
										<span class="title">Login Light</span>
									</a>
								</li>
								<li>
									<a href="extra-timeline.html">
										<span class="title">Timeline</span>
									</a>
								</li>
								<li>
									<a href="extra-timeline-center.html">
										<span class="title">Timeline Centerd</span>
									</a>
								</li>
								<li>
									<a href="extra-notes.html">
										<span class="title">Notes</span>
									</a>
								</li>
								<li>
									<a href="extra-image-crop.html">
										<span class="title">Image Crop</span>
									</a>
								</li>
								<li>
									<a href="extra-portlets.html">
										<span class="title">Portlets</span>
									</a>
								</li>
								<li>
									<a href="blank-sidebar.html">
										<span class="title">Blank Page</span>
									</a>
								</li>
								<li>
									<a href="extra-search.html">
										<span class="title">Search</span>
									</a>
								</li>
								<li>
									<a href="extra-invoice.html">
										<span class="title">Invoice</span>
									</a>
								</li>
								<li>
									<a href="extra-not-found.html">
										<span class="title">404 Page</span>
									</a>
								</li>
								<li>
									<a href="extra-tocify.html">
										<span class="title">Tocify</span>
									</a>
								</li>
								<li>
									<a href="extra-loader.html">
										<span class="title">Loading Progress</span>
									</a>
								</li>
								<li>
									<a href="extra-page-loading-ol.html">
										<span class="title">Page Loading Overlay</span>
									</a>
								</li>
								<li>
									<a href="extra-notifications.html">
										<span class="title">Notifications</span>
									</a>
								</li>
								<li>
									<a href="extra-nestable-lists.html">
										<span class="title">Nestable Lists</span>
									</a>
								</li>
								<li>
									<a href="extra-scrollable.html">
										<span class="title">Scrollable</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="charts-main.html">
								<i class="linecons-globe"></i>
								<span class="title">Charts</span>
							</a>
							<ul>
								<li>
									<a href="charts-main.html">
										<span class="title">Chart Variants</span>
									</a>
								</li>
								<li>
									<a href="charts-range.html">
										<span class="title">Range Selector</span>
									</a>
								</li>
								<li>
									<a href="charts-sparklines.html">
										<span class="title">Sparklines</span>
									</a>
								</li>
								<li>
									<a href="charts-map.html">
										<span class="title">Map Charts</span>
									</a>
								</li>
								<li>
									<a href="charts-gauges.html">
										<span class="title">Circular Gauges</span>
									</a>
								</li>
								<li>
									<a href="charts-bar-gauges.html">
										<span class="title">Bar Gauges</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="linecons-cloud"></i>
								<span class="title">Menu Levels</span>
							</a>
							<ul>
								<li>
									<a href="#">
										<i class="entypo-flow-line"></i>
										<span class="title">Menu Level 1.1</span>
									</a>
									<ul>
										<li>
											<a href="#">
												<i class="entypo-flow-parallel"></i>
												<span class="title">Menu Level 2.1</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="entypo-flow-parallel"></i>
												<span class="title">Menu Level 2.2</span>
											</a>
											<ul>
												<li>
													<a href="#">
														<i class="entypo-flow-cascade"></i>
														<span class="title">Menu Level 3.1</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="entypo-flow-cascade"></i>
														<span class="title">Menu Level 3.2</span>
													</a>
													<ul>
														<li>
															<a href="#">
																<i class="entypo-flow-branch"></i>
																<span class="title">Menu Level 4.1</span>
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">
												<i class="entypo-flow-parallel"></i>
												<span class="title">Menu Level 2.3</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
										<i class="entypo-flow-line"></i>
										<span class="title">Menu Level 1.2</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="entypo-flow-line"></i>
										<span class="title">Menu Level 1.3</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
        @endif
			</ul>


			<!-- notifications and other links -->
			<ul class="nav nav-userinfo navbar-right">
        @if (Auth::guest())
				<li class="dropdown xs-left">
					<a href="{{ url('/login') }}"  class="notification-icon notification-icon-messages">
						<span class="title">Login</span>
					</a>
				</li>
                <li class="dropdown xs-left">
					<a href="{{ url('/register') }}" class="notification-icon notification-icon-messages">
						<span class="title">Register</span>
					</a>
				</li>
      @else
        <li class="dropdown user-profile">
      <a href="#" data-toggle="dropdown">
<!--						<img src="assets/images/user-1.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />-->
        <span class="title">
          {{ Auth::user()->name }}
          <i class="fa-angle-down"></i>
        </span>
      </a>

      <ul class="dropdown-menu user-profile-menu list-unstyled">
        <li>
          <a href="#settings">
            <i class="fa-wrench"></i>
            Paramètres
          </a>
        </li>
        <li>
          <a href="#help">
            <i class="fa-info"></i>
            Aide
          </a>
        </li>
        <li class="last">
          <a href="{{ url('/logout') }}">
            <i class="fa-lock"></i>
            Se deconnecter
          </a>
        </li>
      </ul>
    </li>
  @endif
			</ul>

		</div>

	</nav>



  <header>
  <div class="container">
      <div class="row">
              <div class="header-content">

                  <div class="header-content-inner">
                      @yield('content')
                  </div>
              </div>
      </div>
  </div>
</header>

	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->


	</div>
	<!-- Bottom Scripts -->
	{{-- <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script> --}}
	<script src="{{asset('js/libs.js')}}"></script>


</body>
</html>
