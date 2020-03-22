@extends('newtheme.app')
  @section('title')
    Role
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
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">

                    <div class="col-sm-2">
                      <div class="card">
                        <div class="card-header"><h3>  <b>Add Role</b> </h3> </div>
                    <form action="{{ route('role_create') }}" method="post">
                      @csrf
                      <div class="form-row align-items-center">
                        <div class="col-auto">
                          <label class="sr-only" for="inlineFormInput">Role Name</label>
                          <input type="text" name="name" class="form-control" id="inlineFormInput" placeholder="Role Name">
                        </div>

                        <div class="col-auto">
                          <label class="sr-only" for="inlineFormInput">Description</label>
                          <input type="text" name="description" class="form-control text-center" id="inlineFormInput" placeholder="Description">
                        </div>


                        <div class="col-auto">
                          <button type="submit" class="btn btn-primary ">Add Role</button>
                        </div>
                      </div>
                      </div>
                    </form>
                </div>
                        </div>

                    <table class="table table-striped text-dark">
                    <thead>
                      <tr>
                        <th scope="col">Role ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($roles as $role)
                      <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>
                        <td>
                          <form action="{{ route('role_delete', $role->id)}}" method="post">
                            @csrf
                            @method('POST')
                            <button class="btn btn-danger" type="submit"> Delete </button>
                          </form>
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
                  </main>
