<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>
      @yield('title')
    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">

    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css">

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

    <style>
    .dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
              <a href="#" class="logo">
                <span>
                  <img src="{{ asset('frontend/assets/img/newlogo-awsmcafe.PNG') }}" alt="" height="50">
                </span>
              </a>
            </div>

            <nav class="navbar-custom">
              <ul class="navbar-right list-inline float-right mb-0">
                  <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                      <form role="search" class="app-search">
                          <div class="form-group mb-0">
                              <input type="text" id="search" class="form-control" placeholder="Search..">
                          </div>
                      </form>
                  </li>

                  <li class="dropdown notification-list list-inline-item">
                      <div class="dropdown notification-list nav-pro-img">
                          <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">{{ Auth::user()->name}}</a>
                          <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                              <a class="dropdown-item text-danger" href="{{ route('logout')}}"><i class="mdi mdi-power text-danger"></i> Logout </a></div>
                      </div>
                  </li>
              </ul>
            </nav>
        </div>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                            <li class="menu-title"><h5>Employee Panel</h5></li>
                        <li><a href="{{ route('employeeinfo') }}" class="waves-effect text-light"><span class="badge badge-primary badge-pill float-right"></span> <span> Add Employee Info</span></a></li>
                        <li>
                              <div class="dropdown text-light">
                              <a class="waves-effect ml-4"><span class="badge badge-primary badge-pill float-right"></span> <span>Employee Information</span></a>
                              <div class="dropdown-content ml-4">
                              <a href="{{ route('employee_table') }}" class="fas fa-folder"><span> Personal</span></a>
                              <a href="{{ route('employeeinfo_contact') }}" class="fas fa-folder">Contact</a>
                              <a href="{{ route('employeeinfo_emergency') }}" class="fas fa-folder">Ememrgency</a>
                              <a href="{{ route('jobInfo') }}"  class="fas fa-folder">Job related</a>
                              </div>
                              </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->

        @yield('content')

        <!-- content -->
        <footer class="footer">© 2019 Awesome cafe.</footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

<script src="{{ asset('backend/assets/js/app.js') }}"></script>



</body>

</html>
