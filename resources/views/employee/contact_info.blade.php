@extends('employee.app')

@section('title')
    Empployee Contact
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

                        <div class="card" >
                            <div class="card-header text-center text-dark">  <h5>{{ __('Contact Information') }}</h5> </div>


                            <div class="card-body text-dark">

                                <table  class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td>ID</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Phone No</td>
                                        <td>Alternate Phone No</td>
                                        <td>Email</td>
                                        <td>Present Address</td>
                                        <td>Action</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($employee_infos as $e_info)
                                      <tr>
                                          <td>{{$e_info->id}}</td>
                                          <td>{{$e_info->emp_fname}}</td>
                                          <td>{{$e_info->emp_lname}}</td>
                                          <td>{{$e_info->emp_phone1}}</td>
                                          <td>{{$e_info->emp_phone2}}</td>
                                          <td>{{$e_info->emp_email}}</td>
                                          <td>{{$e_info->emp_preaddress}}</td>
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


@endsection
