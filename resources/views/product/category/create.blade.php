@extends('product.app')

@section('title')
    Category Create
@endsection

@section('content')


<div class="content-page">
  <div class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-dark">{{ __('Category Information') }}</div>
                      <div class="tab">
                    <div class="card-body m-6 text-light ">

                        <form action="{{ route ('category_create') }}"  method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Name') }}</label>
                                <div class="col-md-6 ">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Description') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="description"  required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>

                              <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Submit') }}
                                      </button>

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






@endsection
