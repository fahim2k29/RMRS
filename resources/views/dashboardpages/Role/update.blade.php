@extends('newtheme.app')


<!-- @section('title')
Update Role
@endsection -->


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
      <!-- Start content -->
      <div class="content">
          <div class="container-fluid">
              <div class="page-title-box">
                  <div class="row align-items-center">
                      <div class="col-sm-6">
                      Assign Roles to {{$user->name}}
                    </div>
                    <div class="card-body">
                      @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                        </div><br />
                      @endif
                      <form method="POST" action="{{ route('user_update', $user) }}">
                        @csrf
                        @method('PATCH')
                            @foreach($roles as $role)
                            <div class='form-check' text-dark>
                              <input type="checkbox" name="roles[]" value="{{$role->id}}">
                              <leble>{{$role->name}}</label>
                            </div>
                            @endforeach

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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
