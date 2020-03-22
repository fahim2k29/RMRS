@extends('employee.app')

  @section('title')
      Employee info
  @endsection

  @section('content')

    <div class="content-page">
      <div class="content">
          <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-light">{{ __('Employee Information') }}</div>
                          <div class="tab">


                        <div class="card-body m-6 text-light ">
                            <form method="POST" action="{{ route('employeeupdate', $info->id) }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                                    <div class="col-md-6 ">
                                      <img src="{{ asset('Image/Employee_Image') }}/{{ $info->emp_image }}" class="rounded" alt="{{ $info->emp_image }}" style="width:50px;height:50px";>
                                      <button type="button" onclick="add('1','{{ $info->emp_image }}');" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Change Image</button>
                                         <div id="demo" class="collapse">
                                           <input id="emp_image" value="{{ $info->emp_image }}" class="form-control  @error('image') is-invalid @enderror" name="emp_image"  autocomplete="image" autofocus>
                                         </div>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                                    <div class="col-md-6 ">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="emp_fname" value="{{ $info->emp_fname }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="emp_lname" value="{{ $info->emp_lname }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Contact No') }}</label>

                                    <div class="col-md-6">
                                        <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="emp_phone1" value="{{ $info->emp_phone1 }}" required autocomplete="number" autofocus>
                                        @error('number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Alternate Contact No') }}</label>
                                    <div class="col-md-6">
                                        <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="emp_phone2" value="{{ $info->emp_phone2 }}" required autocomplete="number" autofocus>
                                        @error('number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="emp_email" value="{{ $info->emp_email }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('NID Number') }}</label>
                                    <div class="col-md-6">
                                        <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="employee_nid" value="{{ $info->employee_nid }}" required autocomplete="number" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>
                                    <div class="col-md-6">
                                        <input id="date" type="date"  class="form-control @error('date') is-invalid @enderror" name="emp_birth_date" value="{{ $info->emp_birth_date }}" required autocomplete="date" autofocus>
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
                                    <div class="col-md-6">
                                        <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="emp_age" value="{{ $info->emp_age }}" required autocomplete="number" autofocus>
                                        @error('number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="Address" class="col-md-4 col-form-label text-md-right">{{ __('Present Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="Address" type="text" class="form-control @error('Address') is-invalid @enderror" name="emp_preaddress" value="{{ $info->emp_preaddress }}" required autocomplete="Address" autofocus>
                                        @error('Address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Address" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="Address" type="text" class="form-control @error('name') is-invalid @enderror" name="emp_peraddress" value="{{ $info->emp_peraddress }}" required autocomplete="Address" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="emp_marital_status" value="{{ $info->emp_marital_status }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Emergency Name') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="emrgncy_name" value="{{ $info->emrgncy_name }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Emergency Phone') }}</label>
                                            <div class="col-md-6">
                                                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="emrgncy_phone" value="{{ $info->emrgncy_phone }}" required autocomplete="number" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Relation') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="emrgncy_relation" value="{{ $info->emrgncy_relation }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Emergency Address') }}</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="emrgncy_address" value="{{ $info->emrgncy_address }}" required autocomplete="name" autofocus>
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

                                    </form>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                      </div>
                                      </div>

                                      <script>
                                       function add(id, name)
                                       {
                                         if(id==1)
                                         {
                                           document.getElementById("emp_image").type  = "file";
                                           document.getElementById("emp_image").value  = name;

                                         }
                                         else
                                         {
                                           document.getElementById("emp_image").value  = name;
                                         }

                                       }
                                       </script>
@endsection
