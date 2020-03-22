@extends('newtheme.app')

@section('title')
  Awesome Cafe Dashboard
@endsection


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}


</style>

<!--Main container start -->
	<main class="m-wrapper">
		<div class="container">
		  	<div class="row">
			    <div class="col-sm">



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

            <!-- Start content -->


            <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <h4 class="page-title">Welcome to AwesomeCafe Dashboard</h4>

                            </div>

                        </div>
                    </div>

<!-- Usertable -->

        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-4 header-title mb-4 text-light">User Datatable </h4>
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <table class="table table-editable dataTable no-footer" id="_search" role="grid" aria-describedby="DataTables_Table_0_info" style="position: relative;">
                                            <thead>
                                                <tr role="row">
                                                    <th >Id</th>
                                                    <th >Name</th>
                                                    <th >Role</th>
                                                    <th >Phone</th>
                                                    <th >Email</th>
                                                    <th >Email_verified_at</th>
                                                    <th>Action</th>
                                            </thead>
                                            <tbody>
                                              @foreach ($users as $user)
                                              <tr>
                                                  <td>{{ $user->id }}</td>
                                                  <td>{{ $user->name }}</td>
                                                  <td>{{implode(',',$user->relationroles()->get()->pluck('name')->toArray())}}</td>
                                                  <td>{{ $user->phone }}</td>
                                                  <td>{{ $user->email }}</td>
                                                  <td>{{ $user->email_verified_at }}</td>
                                                  <td class="bg-blue">
                                                    <a href="{{route('assignrole',$user)}}" class="btn btn-primary">Asign_Role</a>
                                                 </td>
                                              </tr>
                                             @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

  <!-- End_usertable -->
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>

            			    </div>
            		</div>
            	</main>
