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
                      <th>Customer Name</th>
                      <th>Address</th>
                      <th>Total Amount</th>
                      <th>Payment Type</th>
                      <th>Payment Status</th>
                      <th>Delivery Status</th>
                      <th>Action</th>

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
                        <td><a href="{{route('delivery_details_status',$order ->id) }}">Change</a> </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>

</div>
</div>
</div>
</div>



@endsection
