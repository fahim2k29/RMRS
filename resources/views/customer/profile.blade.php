@extends('frontpage.homepage.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center"><b>{{ __('Customer Dashboard') }}</b></div>


                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Total Amount</th>
                      <th>Payment Type</th>
                      <th>Payment Status</th>
                      <th>Currant Status</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order-> total_price}}</td>
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



@endsection
