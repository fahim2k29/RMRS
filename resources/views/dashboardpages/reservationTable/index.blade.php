@extends('newtheme.app')

@section('title')
  Order
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

                            </div>
                        </div>
                          <!-- end row -->
                          <div class="row">
                              <div class="col-12">
                                  <div class="card">
                                      <div class="card-body">


                                        <div class="text-center">

                                          <h2 class="mt-0 header-title ">  <b>Reservation Information</b>   </h2>
                                        </div>
                                          <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                              <div class="row">
                                                  <div class="col-sm-10">
                                                      <table id="_search" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">

                                                          <thead>
                                                              <tr role="row">
                                                                  <th >Reserve ID</th>
                                                                  <th >Name</th>
                                                                  <th >Telephone</th>
                                                                  <th >Date</th>
                                                                  <th >Time</th>
                                                                  <th >Table No.</th>
                                                                  <th >Reservation Type</th>
                                                                  <th>Address</th>
                                                                
                                                                  <th >Created At</th>
                                                              </tr>
                                                          </thead>

                                                          <tbody>
                                                            @foreach ($reservations as $reservation)
                                                          <tr >
                                                              <td >{{$reservation->id}}</td>
                                                              <td >{{Auth::user()->name}}</td>
                                                              <td>{{Auth::user()->phone}}</td>
                                                              <td>{{$reservation->journeyDate}}</td>
                                                              <td>{{$reservation->time}}</td>
                                                              <td>{{$reservation->table_number}}</td>
                                                              <td>{{$reservation->reservation_type}}</td>
                                                              <td>{{$reservation->address}}</td>


                                                              <!-- <td>
                                                                <form action="{{ route('reservation_delete', $reservation->id)}}" method="post">
                                                                  @csrf
                                                                  @method('POST')
                                                                  <button class="btn btn-danger" type="submit"> Delete </button>
                                                                </form>
                                                              </td> -->
                                                             <td> {{ $reservation->created_at->diffForHumans() }} </td>
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
                              <!-- end col -->
                          </div>

                          <!-- end row -->
                      </div>
                      <!-- container-fluid -->
                  </div>
                </div>
                  <!-- content -->
</div>
</div>
</div>
</main>
