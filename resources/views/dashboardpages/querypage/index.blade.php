@extends('newtheme.app')
  @section('title')
    Query
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


                  <div class="content-page">
                        <!-- Start content -->
                        <div class="content">
                            <div class="container-fluid">
                                <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <h4 class="page-title">Query Table</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-14">
                                        <div class="card">
                                            <div class="card-body">

                                              <form method="POST" action="{{ route('query_create') }} " method="post">
                                                @csrf
                                              <h4 class="mt-0 header-title">Queries</h4>
                                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="_search" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th >ID</th>
                                                                        <th >Name</th>
                                                                        <th >Email</th>
                                                                        <th >phone</th>
                                                                        <th >Feedback</th>
                                                                        <th > Action </th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                  @foreach ($contacts as $contact)
                                                                  <tr >
                                                                    <td >{{$contact->id}}</td>
                                                                    <td >{{$contact->name}}</td>
                                                                    <td>{{$contact->email}}</td>
                                                                    <td>0{{$contact->phone}}</td>
                                                                    <td>{{$contact->feedback}}</td>
                                                                    <td>
                                                                      <form action="{{ route('query_delete', $contact->id)}}" method="post">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button class="btn btn-danger" type="submit"> Delete </button>
                                                                      </form>
                                                                    </td>
                                                                  </tr>

                                                                  @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>

                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                          <!-- end row -->
                            </div>
                            <!-- container-fluid -->
                        </div>
                      </div>
                        </div>
                      </div>
                        </div>
                      </main>
