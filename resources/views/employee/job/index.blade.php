@extends('newtheme.app')

@section('title')
    Employee Job Info
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
                        <div class="card " style="width: 30rem;">
                            <div class="card-header text-center"> <h2>{{ __('Employee Job Information') }}</h2> </div>

                            <div class="card-body">

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
                                        <td>Action</td>
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
                                          <td>
                                            <a href="{{route('e_job_updatepage',$e_job->id)}}" class="btn btn-primary">Edit</a>
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
                      </div>
                  </div>
          </div>
        </main>
