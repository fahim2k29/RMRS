@extends('product.app')

@section('title')
    Product Create
@endsection

@section('content')


<div class="content-page">
  <div class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-dark">{{ __('Product Information') }}</div>
                      <div class="tab">
                    <div class="card-body m-6 text-dark ">

                        <form action="{{ route ('product_create') }}"  method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Product Code') }}</label>
                                <div class="col-md-6 ">
                                    <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="product_code"  required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Product Image') }}</label>
                                <div class="col-md-6 ">
                                    <input id="image" type="file" class="form-control @error('name') is-invalid @enderror" name="product_image"  required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>

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
                                  <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Category Name') }}</label>
                                    <div class="col-md-6">
                                          <select class="form-control" name="cat_id" >
                                            @foreach ($cato as $cat)
                                            <option value="{{ $cat->id }}" > {{ $cat->name }} </option>
                                          @endforeach
                                        </select>
                                    </div>
                              </div>

                              <div class="form-group row">
                                  <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Food Type') }}</label>
                                    <div class="col-md-6">
                                          <select class="form-control" name="type_id" >
                                            @foreach ($type as $type)
                                            <option value="{{ $type->id }}" > {{ $type->name }} </option>
                                          @endforeach
                                        </select>
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

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Price') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="phoneInput" class="form-control @error('name') is-invalid @enderror" name="price"  required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>

                              <div class="form-group row">
                                  <label for="stock_quantity" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Stock Quantity') }}</label>
                                  <div class="col-md-6">
                                      <input id="stock_quantity" type="number min:1" class="form-control @error('stock_quantity') is-invalid @enderror" name="stock_quantity"  required autocomplete="stock_quantity" autofocus>
                                      @error('stock_quantity')
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

                            </form>

                                </div>
                            </div>
                                </div>
                            </div>
                                </div>
                            </div>
                                </div>
                            </div>






@endsection
