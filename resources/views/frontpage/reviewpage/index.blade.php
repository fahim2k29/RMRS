@extends('layouts.app')


@section('title')
    Review Page
@endsection

    @section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('Create Your Review') }}</div>
                    <form id="reviewcreate" action="{{ route('review_create') }}" method="post">
                      @csrf
                    <div>
                      <label for="name"><b>Name</b></label>
                      <input type="text" placeholder="Enter Name" name="name" required>
                    </div>
                    <div>
                      <label for="email"><b>Email</b></label>
                      <input type="text" placeholder="Enter Email" name="email" required>
                    </div>
                    <div>
                      <label for="rating"><b>Rating</b></label>
                      <input type="number"  name="rating" required>
                    </div>

                    <div>
                      <textarea name="feedback" rows="4" cols="60" placeholder="Your Opinion.." ></textarea>
                    </div>
                    <div  class="row justify-content-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>





@endsection
