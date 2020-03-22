@extends('product.app')

@section('title')
    Category
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
                        <div class="card-header text-center text-dark"><h4><b>{{ __('Category') }}</b></h4></div>

                        <div class="col-md-8 offset-md-0">
                            <a href="{{ route('category_form') }}"  class="btn btn-primary">
                                {{ __('Create New') }}
                            </a>
                        </div>

                        <div class="card-body text-dark">

                                <table id="_search" class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td> ID </td>
                                        <td> Name </td>
                                        <td> Description </td>
                                        <td colspan="2">Action</td>
                                      </tr>
                                  </thead>

                                  <tbody>
                                      @foreach($categories as $catgry)
                                      <tr>
                                          <td>{{$catgry->id}}</td>
                                          <td>{{$catgry->name}}</td>
                                          <td>{{$catgry->description}}</td>
                                          <td>
                                            <a href="{{route('category_updatepage',$catgry->id)}}" class="btn btn-primary">Edit</a>
                                          </td>
                                          <td>
                                            <form action="{{ route('category_delete', $catgry->id)}}" method="post">
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
