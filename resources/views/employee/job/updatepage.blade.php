@extends('newtheme.app')

@section('title')
    Employee Job Update
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

    <div class="content-page">
      <div class="content">
          <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-light">{{ __('Employee Information') }}</div>
                          <div class="tab">


                        <div class="card-body m-6 text-light ">
                            <form method="POST" action="{{ route('e_job_update', $jobinfo->id) }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">


                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Employee Id') }}</label>
                                      <div class="col-md-6">
                                            <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="e_id" value="{{ $jobinfo->e_id }}" required autocomplete="name" autofocus>
                                      </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>
                                    <div class="col-md-6 ">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="designation" value="{{ $jobinfo->designation }}"  required autocomplete="name" autofocus>
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
                                        <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="salary" value="{{ $jobinfo->salary }}"  required autocomplete="name" autofocus>
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
                                        <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="bonus"  value="{{ $jobinfo->bonus }}" required autocomplete="name" autofocus>
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
                                        <input id="date" type="date"  class="form-control @error('date') is-invalid @enderror" name="joindate" value="{{ $jobinfo->joindate }}" required autocomplete="date" autofocus>
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
                                        <input id="date" type="date"  class="form-control @error('date') is-invalid @enderror" value="{{ $jobinfo->resigndate }}" name="resigndate"  >
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
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="status" value="{{ $jobinfo->status }}" required autocomplete="name" autofocus>
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
