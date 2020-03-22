@extends('employee.app')

@section('title')
    Employee Info
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
                        <div class="card " style="width: 68rem;">
                            <div class="card-header text-center text-dark"><h5> {{ __('Employee Table') }} </h5></div>

                            <div class="card-body text-dark">

                                <table  class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td>ID</td>
                                        <td>Image</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Phone No</td>
                                        <td>Email</td>
                                        <td>NID number</td>
                                        <td>Age</td>
                                        <td>Permanent Address</td>
                                        <td>Marital Status</td>
                                        <td>Action</td>
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
                                          <td>{{$e_info->emp_email}}</td>
                                          <td>{{$e_info->employee_nid}}</td>
                                          <td>{{$e_info->emp_age}}</td>
                                          <td>{{$e_info->emp_peraddress}}</td>
                                          <td>{{$e_info->emp_marital_status}}</td>
                                                                                  <td>
                                            <a href="{{route('employeeupdatepage',$e_info->id)}}" class="btn btn-primary">Edit</a>
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
