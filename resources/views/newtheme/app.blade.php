<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from tevratgundogdu.com/works/ideabox-material-menu/index-fixed-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2019 02:44:52 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Awesome Cafe dashboard</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Bootstrap CSS file -->
	<link rel="stylesheet" href="{{ asset('newtheme/../../../stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css') }}">

	<!-- Ideabox main theme css file. you have to add all pages -->
	<link rel="stylesheet" type="text/css" href="{{ asset('newtheme/css/main-style.css') }}">



	<script src="{{ asset('js/app.js') }}" defer></script>


	  <script src="{{ asset('js/jquerysearch.js') }}"></script>


	  <script >

	  $(document).ready(function(){

	    $('#search').keyup(function(){
	      search_table($(this).val());
	    });
	    function search_table(value){
	      $('#_search tr').each(function(){
	        var found = 'false';
	        $(this).each(function(){
	          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
	          {
	            found = 'true';
	          }
	        });
	        if(found == 'true')
	        {
	          $(this).show();
	        }
	        else
	        {
	          $(this).hide();
	        }
	      });
	    }
	  });

	  </script>


	<style type="{{ asset('newtheme/text/css') }}">

		/*Font of your page. you can use any font. like google font or font-face font
		  Demo page styles here
		*/
		body{
			font-family: 'Poppins', sans-serif;
			font-size: 14px;
		}

	</style>
</head>

<body class="m-pinned-sidebar m-opened-sidebar">

	<!-- header start -->
	<header class="m-header">
		<div class="m-header-wrapper">

			<!--sidebar menu toggler start -->
			<div class="m-toggle-sidebar m-material-button">
				<i class="material-icons m-open-icon">&#xE5D2;</i>
				<i class="material-icons m-close-icon">close</i>
			</div>
			<!--sidebar menu toggler end -->

			<!--logo start -->
			<div class="m-logo-box">
				<h1>
					<a href="{{route('dashboard') }}" class="m-logo">
						<img class="m-logo-desktop" src="{{ asset('frontend/assets/img/newlogo-awsmcafe.PNG') }}" width="160" height="35">
					</a>
				</h1>
			</div>
			<!--logo end -->


			<div class="m-header-right m-with-seperator">

				<!-- header right menu start -->
				<ul class="m-header-navigation">
					<li>
						<a href="#" class="m-material-button m-search-toggle"><i class="material-icons">&#xE8B6;</i></a>
					</li>

					<li>
						<a href="#" class="m-material-button m-submenu-toggle"><span>{{ Auth::user()->name}}</span></a>
						<div class="m-header-submenu">
							<ul>

								<li><a href="{{ route('logout')}}">Logout</a></li>
							</ul>
						</div>
					</li>

				</ul>
				<!-- header right menu end -->

			</div>

			<!--header search panel start -->
			<div class="m-search-bar">
					<div class="m-search-input-wrapper">
						<input type="text" id="search" name="qq" placeholder="search something..." class="m-search-input">
					</div>
					<span class="m-search-close m-search-toggle">
						<i class="material-icons">&#xE5CD;</i>
					</span>
			</div>
			<!--header search panel end -->

		</div>
	</header>
	<!-- header end -->


	<!-- Left sidebar menu start -->
	<div class="m-sidebar">
		<div class="m-sidebar-wrapper">

			<!-- side menu logo start -->
			<div class="m-sidebar-logo">
				<div class="">
					<h1><b>  Admin Panel</b></h1>
				</div>
				<div class="m-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons m-fixed-icon">gps_fixed</i>
					<i class="material-icons m-not-fixed-icon">gps_not_fixed</i>
				</div>
				<div class="m-sidebar-toggle-button">
					<i class="material-icons">&#xE317;</i>
				</div>
			</div>
			<!-- side menu logo end -->

			<!-- sidebar menu start -->
			<nav class="m-sidebar-navi">
				<ul>
					<li>
						<a href="#" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE88A;</i></span>
		                	<span class="m-label"> <b>Manage User</b> </span>
		                </a>

										<ul>
										 <li>
											 <a href="{{ route('dashboard') }}" class="m-material-button"><span class="m-label">User Datatable</span></a>
										 </li>
										 <li>
											 <a href="{{ route('role') }}" class="m-material-button"><span class="m-label">Manage Role</span></a>
										 </li>
									 </ul>
		            </li>

		            <li>
						<a href="{{ route('product') }}" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE871;</i></span>
		                	<span class="m-label"> <b>Manage Menu</b> </span>
		                	<span class="m-arrow-icon"><i class="material-icons">&#xE313;</i></span>
		                </a>
		            </li>

		            <li>
						<a href="{{ route('order_details') }}" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE89B;</i></span>
		                	<span class="m-label"> <b>Manage Order</b> </span>
		                </a>
		            </li>

		            <li>
						<a href="{{ route('order') }}" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE89B;</i></span>
		                	<span class="m-label"> <b>Reservation</b> </span>
		                </a>
		            </li>
		            <li>
						<a href="#" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE875;</i></span>
		                	<span class="m-label"><b>Manage Employee</b></span>
		                	<span class="m-arrow-icon"><i class="material-icons">&#xE313;</i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{ route('employee') }}" class="m-material-button"><span class="m-label">Employee Datatables</span></a>
		                	</li>
		                	<li>
		                		<a href="{{ route('e_jobInfo') }}" class="m-material-button"><span class="m-label">Job info</span></a>
		                	</li>

		                </ul>
		            </li>

		            <li>
						<a href="{{ route('query') }}" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE0BE;</i></span>
		                	<span class="m-label"> <b>Query / Feedback</b> </span>
		                </a>
		            </li>

		            <!-- <li>
						<a href="#" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE8F7;</i></span>
		                	<span class="m-label"> <b>Invoices</b> </span>
		                </a>
		            </li> -->

		            <li class="m-seperate"></li>

		            <!-- <li class="show">
						<a href="#" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE3D1;</i></span>
		                	<span class="m-label">Report</span>
		                	<span class="m-arrow-icon"><i class="material-icons">&#xE313;</i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="#" class="m-material-button"><span class="m-label">Daily Order report</span></a>
		                	</li>


		                </ul>
		            </li> -->
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->




	<div class="m-overlay"></div>

	<!--Jquery Library incluse -->
	<script src="{{ asset('newtheme/js/jquery-3.3.1.min.js') }}"></script>

	<!--popper.js include. for Bootstrap -->
    <script src="{{ asset('newtheme/../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js') }}"></script>

    <!--Bottostrap include -->
    <script src="{{ asset('newtheme/../../../stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js') }}"></script>

			<script src="{{ asset('js/jquerysearch.js') }}"></script>


</body>


<!-- Mirrored from tevratgundogdu.com/works/ideabox-material-menu/index-fixed-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2019 02:44:52 GMT -->
</html>
