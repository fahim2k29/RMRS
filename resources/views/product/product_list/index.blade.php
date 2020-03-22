@extends('product.app')

@section('title')
    Food Details
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
                    <div class="card " style="width: 50rem;">
                        <div class="card-header text-dark">{{ __('Food Details') }}</div>

                        <div class="col-md-8 offset-md-0">
                            <a href="{{ route('product_form') }}"  class="btn btn-primary">
                                {{ __('Create New') }}
                            </a>
                        </div>

                        <div class="card-body text-dark">
                                <table id="_search" class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr>
                                        <td> No </td>
                                        <td> Food Code </td>
                                        <td> Image </td>
                                        <td> Name </td>
                                        <td> Category Name </td>
                                        <td> Description </td>
                                        <td> Quantity </td>
                                        <td> Price </td>
                                        <td> Status </td>
                                        <td colspan="2">Action</td>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      @foreach($products as $prdct)
                                      <tr>
                                          <td>{{ $prdct->id }}</td>
                                          <td>{{$prdct->product_code}}</td>
                                          <td><img src="{{ asset('Image/product_photo') }}/{{ $prdct->product_image }}" class="rounded" alt="{{ $prdct->product_image  }}" style="width:50px;height:50px";></td>
                                          <td>{{$prdct->name}}</td>
                                          <td>{{$prdct->category_info-> name }}</td>
                                          <td>{{$prdct->description}}</td>
                                          <td>{{$prdct->stock_quantity}}</td>
                                          <td>{{$prdct->price}}</td>
                                          @if($prdct->status==1)
                                          <td class="text-success">Available</td>
                                          @else
                                          <td class="text-danger">Unavailable</td>
                                          @endif

                                          <td>
                                            <a href="{{route('product_updatepage',$prdct->id)}}" class="btn btn-primary">Edit</a>
                                          </td>
                                          <!-- <td>
                                            <form action="{{ route('product_delete', $prdct->id)}}" method="post">
                                              @csrf
                                              @method('POST')
                                              <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                          </td> -->

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
