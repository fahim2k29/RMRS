@extends('frontpage.homepage.app')

@section('content')


                <div id="toPrint" class="container">
                    <div class="card">
                        <div class="card-header">

                          <br>
                          <center><h4><b>Awesome Cafe</b></h4></center>

                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="mb-3"><b>From</b>:</h5>
                                    Awesome Cafe <br>
                                        1 & 3 Rd No. 21, <br>
                                        Nikunja, Khilkhet, Dhaka-1229<br></b></p>
                                </div>

                                <div class="col-sm-6">
                                    <h5 class="mb-3"><b>To</b>:</h5>
                                    <div>
                                      {{$orders -> address}}
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive-sm">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Item</th>
                                            <th> Quantity</th>
                                            <th> Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($order_products as $order_product)
                                          <tr>
                                              <td>{{ $order_product->order_id }}</td>
                                              <td>{{ $order_product->products->name }}</td>
                                              <td>{{ $order_product->quantity }}</td>
                                              <?php $total = ($order_product -> products ->price)*($order_product->quantity) ?>
                                              <td>{{ $total }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-5">

                                </div>

                                <div class="col-lg-4 col-sm-5 ml-auto">
                                    <table class="table table-clear">
                                        <tbody>
                                            <tr>
                                                <td class="left">
                                                    <strong>Total Amount</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>৳{{ $orders->total_price }} </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong>Total Paid </strong>
                                                </td>
                                                <td class="right">
                                                    <strong>৳ {{ $orders->total_price }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong>Due</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>৳ 0 </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <center><span class="float-right"> <button onclick="myApp.printTable()" >Print</button> </span></center>
                <br>

                <script >

                  var myApp = new function () {
                         this.printTable = function () {
                             var tab = document.getElementById('toPrint');
                             var win = window.open();
                             win.document.write(tab.outerHTML);
                             win.document.close();
                             win.print();
                         }
                     }


                </script>

@endsection
