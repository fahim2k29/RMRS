@extends('frontpage.homepage.app')

@section('title')
    Contact
@endsection

@section('content')


<section>
    <div class="lgx-banner lgx-banner-inner">
        <div class="lgx-page-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading-area lgx-heading-area-fixedlogo">
                            <div class="lgx-heading lgx-heading-white">
                                <h2 class="heading-title">Contact Us</h2>
                            </div>
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div><!--//.ROW-->
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>

<main>

  <div class="lgx-page-wrapper">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-offset-1 col-md-10">

                    <div class="col-md-6">

                          <p><b>To contact us by phone, please <h3>Call: 02-55336692 </h3></b></p>

                          <br>

                            <p><b><h4>Mailing Address: </h4>Awesome Cafe <br>
                                1 & 3 Rd No. 21, <br>
                                Nikunja, Khilkhet, Dhaka-1229<br></b></p>
                                
                                <br>

                            <p> <b><h4> E-mail:</h4> <h5>info@asmcafe.com</h5></b> </p>
                    </div>

                    <div class="col-md-4">
                          <form id="contactpage" action="{{ route('contact_create') }}" method="post">
                            @csrf

                          <div class="card">
                              <div class="card-header"><b><h3>{{ __('Send Your Query') }}</h3></b></div>
                          </div>


                          <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-10">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required >
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-10">
                              <input id="email" type="text" class="form-control @error('name') is-invalid @enderror" name="email"  required >
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-10">
                              <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"  placeholder="017XXXXXXXX" name="phone" required>
                              @error('phone')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="feedback" class="col-md-3 col-form-label text-md-right">{{ __('Feedback') }}</label>
                            <div class="col-md-10">
                              <textarea name="feedback" rows="6" cols="50"></textarea>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>

                          <div  class="col-md-11">
                            <button class="btn lgx-btn primary" type="submit" ><span>Send</span></button>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>

</main>




@endsection
