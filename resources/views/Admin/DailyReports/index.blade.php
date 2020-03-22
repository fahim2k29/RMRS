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
    <form class="form-inline" action="{{route('dateinput')}}" method="POST">
      @csrf
      <div class="" style="width:200px">
        Enter a Date: <input type="date" name="date"  class=" form-control">
        <button type="submit">Submit</button>
      </div>
    </form>

      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card" >
                  <div class="card-header">{{ __('Daily Report') }}</div>

                  <table>

                    <td style="width:810px"></td>

                        <td>
                          <a onclick="myApp.printTable()" class="btn btn-default" bgcolor="gray"><i class="fa fa-print">Print Page</i>

                        </a>
                      </td>
                    </tr>

                  </table>

                  <div id="toPrint"  class="card-body" >
                    <h3><center>RMRS</center></h3>
                    <h4>Daily Sales Report</h4>
                    @if(isset($dailyreport))
                    <h2><strong>Daily Total Sales: {{$sum}} ৳</strong></h2>
                      <table class="table table-responsive-xl table-striped table-hover" >
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
                        </tbody>
                      </table>
                      @endif
                  </div>
                </div>
              </div>
            </div>
        </div>
</div>

<script >

  var myApp = new function () {
         this.printTable = function () {
             var tab = document.getElementById('toPrint');
             var win = window.open('', '', 'height=700,width=700');
             win.document.write(tab.outerHTML);
             win.document.close();
             win.print();
         }
     }


</script>
