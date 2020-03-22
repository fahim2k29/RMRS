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
	<link rel="stylesheet" href="<?php echo e(asset('newtheme/../../../stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css')); ?>">

	<!-- Ideabox main theme css file. you have to add all pages -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('newtheme/css/main-style.css')); ?>">



	<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


	  <script src="<?php echo e(asset('js/jquerysearch.js')); ?>"></script>


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


	<style type="<?php echo e(asset('newtheme/text/css')); ?>">

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
					<a href="<?php echo e(route('dashboard')); ?>" class="m-logo">
						<img class="m-logo-desktop" src="<?php echo e(asset('frontend/assets/img/newlogo-awsmcafe.PNG')); ?>" width="160" height="35">
					</a>
				</h1>
			</div>
			<!--logo end -->

			<div class="m-header-menu">

				<!-- header left menu start -->
				<ul class="m-header-navigation">
					<li>
						<a href="#" class="m-material-button m-submenu-toggle">HOME</a>
					</li>
					<li>
						<a href="#" class="m-material-button m-submenu-toggle">QUICK MENU <i class="material-icons">&#xE313;</i></a>
						<div class="m-header-submenu">
							<ul>
								<li><a href="#">Generate Reposts</a></li>
								<li><a href="#">Add New Event</a></li>
								<li><a href="#">Create New Task</a></li>
								<li><a href="#">Latest Tasks</a></li>
								<li><a href="#">Add User</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header left menu end -->

			</div>

			<div class="m-header-right m-with-seperator">

				<!-- header right menu start -->
				<ul class="m-header-navigation">
					<li>
						<a href="#" class="m-material-button m-search-toggle"><i class="material-icons">&#xE8B6;</i></a>
					</li>
					<li>
						<a href="#" class="m-material-button m-submenu-toggle"><i class="material-icons">&#xE7F4;</i></a>
						<div class="m-header-submenu m-notify-list">
							<div class="m-notify-header">
								<span class="m-notify-text-top">9 New</span>
								<span class="m-notify-text">User Notifications</span>
							</div>
							<div class="m-notify-tab">
								<ul class="nav">
									<li><a href="#1a" data-toggle="tab" class="active">Alerts</a></li>
									<li><a href="#2a" data-toggle="tab">Events</a></li>
									<li><a href="#3a" data-toggle="tab">Logs</a></li>
								</ul>

								<div class="tab-content clearfix">
									<div class="tab-pane active" id="1a">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
									</div>
									<div class="tab-pane" id="2a">
										Lorem Dummy text ever since the 1500s, Ipsum has been the industry's standard
									</div>
									<div class="tab-pane" id="3a">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry.
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="m-material-button m-submenu-toggle"><span><?php echo e(Auth::user()->name); ?></span></a>
						<div class="m-header-submenu">
							<ul>
								
								<li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
							</ul>
						</div>
					</li>
					<li class="m-hide-on-mobile">
						<a href="#" class="m-material-button"><i class="material-icons">&#xE42A;</i></a>
						<div class="m-header-submenu m-extra-menu">
							<a href="#">
								<i class="material-icons">&#xE030;</i>
								<span>Musics</span>
							</a>
							<a href="#">
								<i class="material-icons">&#xE04A;</i>
								<span>Videos</span>
							</a>
							<a href="#">
								<i class="material-icons">&#xE158;</i>
								<span>Emails</span>
							</a>
							<a href="#">
								<i class="material-icons">&#xE160;</i>
								<span>Reports</span>
							</a>
							<a href="#">
								<i class="material-icons">&#xE24E;</i>
								<span>Persons</span>
							</a>
							<a href="#">
								<i class="material-icons">&#xE251;</i>
								<span>Pictures</span>
							</a>
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
											 <a href="<?php echo e(route('dashboard')); ?>" class="m-material-button"><span class="m-label">User Datatable</span></a>
										 </li>
										 <li>
											 <a href="<?php echo e(route('role')); ?>" class="m-material-button"><span class="m-label">Manage Role</span></a>
										 </li>
									 </ul>
		            </li>

		            <li>
						<a href="<?php echo e(route('product')); ?>" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE871;</i></span>
		                	<span class="m-label"> <b>Manage Menu</b> </span>
		                	<span class="m-arrow-icon"><i class="material-icons">&#xE313;</i></span>
		                </a>
		            </li>

		            <li>
						<a href="<?php echo e(route('order_details')); ?>" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE89B;</i></span>
		                	<span class="m-label"> <b>Manage Order</b> </span>
		                </a>
		            </li>

		            <li>
						<a href="<?php echo e(route('order')); ?>" class="m-material-button">
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
		                		<a href="<?php echo e(route('employee')); ?>" class="m-material-button"><span class="m-label">Employee Datatables</span></a>
		                	</li>
		                	<li>
		                		<a href="<?php echo e(route('e_jobInfo')); ?>" class="m-material-button"><span class="m-label">Job info</span></a>
		                	</li>

		                </ul>
		            </li>

		            <li>
						<a href="<?php echo e(route('query')); ?>" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE0BE;</i></span>
		                	<span class="m-label"> <b>Query / Feedback</b> </span>
		                </a>
		            </li>

		            <li>
						<a href="#" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE8F7;</i></span>
		                	<span class="m-label"> <b>Invoices</b> </span>
		                </a>
		            </li>

		            <li class="m-seperate"></li>

		            <li class="show">
						<a href="#" class="m-material-button">
							<span class="m-icon"><i class="material-icons">&#xE3D1;</i></span>
		                	<span class="m-label">Report</span>
		                	<span class="m-arrow-icon"><i class="material-icons">&#xE313;</i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="#" class="m-material-button"><span class="m-label">Daily Order report</span></a>
		                	</li>

		                	<li>
		                		<a href="#" class="m-material-button">
		                			<span class="m-label">Level 1.2</span>
		                			<span class="m-arrow-icon"><i class="material-icons">&#xE313;</i></span>
		                		</a>
		                		<ul>
				                	<li>
				                		<a href="#" class="m-material-button"><span class="m-label">Level 1.2.1</span></a>
				                	</li>

				                </ul>
		                	</li>

		                </ul>
		            </li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->




	<div class="m-overlay"></div>

	<!--Jquery Library incluse -->
	<script src="<?php echo e(asset('newtheme/js/jquery-3.3.1.min.js')); ?>"></script>

	<!--popper.js include. for Bootstrap -->
    <script src="<?php echo e(asset('newtheme/../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js')); ?>"></script>

    <!--Bottostrap include -->
    <script src="<?php echo e(asset('newtheme/../../../stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js')); ?>"></script>

			<script src="<?php echo e(asset('js/jquerysearch.js')); ?>"></script>


</body>


<!-- Mirrored from tevratgundogdu.com/works/ideabox-material-menu/index-fixed-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2019 02:44:52 GMT -->
</html>
<?php /**PATH E:\NewProject-master-master\NewProject-master-master\resources\views/newtheme/app.blade.php ENDPATH**/ ?>