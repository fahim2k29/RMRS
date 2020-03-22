@extends('product.app')

@section('title')
    Stock
@endsection

@section('content')


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
                        <div class="card-header">{{ __('Stock Information') }}</div>


                        <div class="col-md-8 offset-md-0">
                            <a href="{{ route('stock_form') }}"  class="btn btn-primary">
                                {{ __('Create New') }}
                            </a>
                        </div>


                        <div class="card-body">

                                <table class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td> ID </td>
                                        <td> Product Code </td>
                                        <td> Name </td>
                                        <td> Quantity </td>
                                        <td> Description </td>
                                        <td colspan="2"> Action </td>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      @foreach($stocks as $stck)
                                      <tr>
                                          <td>{{$stck->id}}</td>
                                          <td>{{$stck->product_code}}</td>
                                          <td>{{$stck->name}}</td>
                                          <td>{{$stck->quantity}}</td>
                                          <td>{{$stck->description}}</td>
                                          <td>
                                            <a href="{{route('stock_updatepage',$stck->id)}}" class="btn btn-primary">Edit</a>
                                          </td>
                                          <td>
                                            <form action="{{ route('stock_delete', $stck->id)}}" method="post">
                                              @csrf
                                              @method('POST')
                                              <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
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
                  </div>
          </div>
@endsection
