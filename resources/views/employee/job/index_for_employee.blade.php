@extends('employee.app')

@section('title')
    Employee Job Info
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
                            <div class="card-header text-center text-dark"> <h5>{{ __('Employee Job Information') }}</h5> </div>

                            <div class="card-body text-dark">

                                <table class="card-table table-responsive table-bordered">
                                  <thead>
                                      <tr >
                                        <td>ID</td>
                                        <td>Designation</td>
                                        <td>Salary</td>
                                        <td>Bonus</td>
                                        <td>Joindate</td>
                                        <td>Resigndate</td>
                                        <td>Status</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($e_job_infos as $e_job)
                                      <tr>
                                          <td>{{$e_job->id}}</td>
                                          <td>{{$e_job->designation}}</td>
                                          <td>{{$e_job->salary}}</td>
                                          <td>{{$e_job->bonus}}</td>
                                          <td>{{$e_job->joindate}}</td>
                                          <td>{{$e_job->resigndate}}</td>
                                          <td>{{$e_job->status}}</td>
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
