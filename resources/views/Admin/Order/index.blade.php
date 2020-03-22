@extends('newtheme.app')

@section('title')
    Order Products
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
    <div class="content">
        <div class="container-fluid text-light">
          <div class="uper">
            @if(session()->get('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <br />
            @endif

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-lg">
                        <div class="card " style="width: 30rem;">
                            <div class="card-header text-center"> <h2>{{ __('Order Information') }}</h2> </div>

                            <div class="card-body">

                                <table class="card-table table-responsive table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Customer Name</th>
                                      <th>Address</th>
                                      <th>Total Amount</th>
                                      <th>Payment Type</th>
                                      <th>Payment Status</th>
                                      <th>Delivery Status</th>

                                    </tr>
                                  </thead>
                                  <tbody>

                                    @foreach($orders as $order)
                                    <tr>

                                        <td>{{$order->customer->name}}</td>
                                        <td>{{$order->address}}</td>
                                        <td>{{$order->total_price}}</td>
                                        <td>{{ ($order->pm == 1) ? "Cash On Delivery" : "Credit Card" }}</td>
                                        <td>{{ ($order->payment_status == 1) ? "Pending" : "Complete" }}</td>
                                        @if($order->d_status==1)
                                        <td class="text-success"><b>Delivered</b></td>
                                        @else
                                        <td class="text-warning"><b>Picked</b></td>
                                        @endif
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
                  </div>
          </div>
                      </div>
                  </div>
          </div>
        </main>
