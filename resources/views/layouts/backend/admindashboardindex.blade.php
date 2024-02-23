@include('layouts/backend.dashboardheader')

@include('layouts/backend.adminleftsidebar')

 <!--Start Main Section-->
 <main class="mains">

	<!--start topbar section -->
	@include('layouts/backend.dashboardnav')
	<!-- end topbar section -->

	@yield('content')	
 </main>
 <!--end main page-->



@include('layouts/backend.dashboardfooter')