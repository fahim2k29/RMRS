@extends('employee.app')

  @section('title')
      Employee job create
  @endsection

  @section('content')
    <div class="content-page">
      <div class="content">
          <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-light">{{ __('Employee Job create') }}</div>
                          <div class="tab">

                            <div class="card-body m-6 text-light ">
                                <form method="POST" action="{{ route('e_jobInfo_create') }}" enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Employee Id') }}</label>
                                          <div class="col-md-6">
                                                <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="e_id" required autocomplete="name" autofocus>
                                          </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>
                                        <div class="col-md-6 ">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="designation" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>
                                        <div class="col-md-6 ">
                                            <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="salary"  required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bonus') }}</label>
                                        <div class="col-md-6 ">
                                            <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="bonus"  required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Joined Date') }}</label>
                                        <div class="col-md-6">
                                            <input id="date" type="date"  class="form-control @error('date') is-invalid @enderror" name="joindate"  required autocomplete="date" autofocus>
                                            @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Resigned Date') }}</label>
                                        <div class="col-md-6">
                                            <input id="date" type="date"  class="form-control @error('date') is-invalid @enderror" name="resigndate"  >
                                            @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                                        <div class="col-md-6 ">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="status"  required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
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
