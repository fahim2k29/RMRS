@extends('newtheme.app')

@section('title')
    Employee Info
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
                        <div class="card " style="width: 68rem;">
                            <div class="card-header">{{ __('Employee Table') }}</div>


                            <div class="card-body">

                                <table id="_search" class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td>ID</td>
                                        <td>Image</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Phone No</td>
                                        <td>Alternate Phone No</td>
                                        <td>Email</td>
                                        <td>NID number</td>
                                        <td>Birth Date</td>
                                        <td>Age</td>
                                        <td>Present Address</td>
                                        <td>Permanent Address</td>
                                        <td>Marital Status</td>
                                        <td>Emergeny Name</td>
                                        <td>Emergeny Phone</td>
                                        <td>Relation</td>
                                        <td>Emergeny Address</td>
                                        <!-- <td >Action</td> -->
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($employee_infos as $e_info)
                                      <tr>
                                          <td>{{$e_info->id}}</td>
                                          <td><img src="{{ asset('Image/Employee_Image') }}/{{ $e_info->emp_image }}" class="rounded" alt="{{ $e_info->emp_image }}" style="width:50px;height:50px";></td>
                                          <td>{{$e_info->emp_fname}}</td>
                                          <td>{{$e_info->emp_lname}}</td>
                                          <td>{{$e_info->emp_phone1}}</td>
                                          <td>{{$e_info->emp_phone2}}</td>
                                          <td>{{$e_info->emp_email}}</td>
                                          <td>{{$e_info->employee_nid}}</td>
                                          <td>{{$e_info->emp_birth_date}}</td>
                                          <td>{{$e_info->emp_age}}</td>
                                          <td>{{$e_info->emp_preaddress}}</td>
                                          <td>{{$e_info->emp_peraddress}}</td>
                                          <td>{{$e_info->emp_marital_status}}</td>
                                          <td>{{$e_info->emrgncy_name}}</td>
                                          <td>{{$e_info->emrgncy_phone}}</td>
                                          <td>{{$e_info->emrgncy_relation}}</td>
                                          <td>{{$e_info->emrgncy_address}}</td>

                                          <!-- <td>
                                            <form method="POST" action="{{route('e_jobInfo',$e_info->id)}}" method="post">
                                              @csrf

                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                  Add Job info
                                                </button>
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


          <!-- Modal -->
          <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <form id="food_type_create" action="{{ route('e_jobInfo_create') }}" method="post">
                  @csrf

              <div class="form-group">
                  <label for="name" >{{ __('Employee Id') }}</label>
                  <input id="name" type="number" class="form-control @error('name') is-invalid @enderror" name="e_id" required autocomplete="name" autofocus>
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


              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </form>

                  </div>
                </div>
              </div>
            </div> -->


        </div>
      </div>
    </div>
  </main>
