@extends('layouts.app')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Register Page</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.blade.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Pages</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-7 col-xl-6">
            <div class="login-register-form-wrap register-form-wrap">
              <div class="login-register-form">
                <div class="form-title">
                  <h4 class="title">Register Now</h4>
                </div>
{{--                    form dk candidate--}}
                  <div class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">
                    <form action="#" method="post">
                        @csrf
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="candidate-tab" data-bs-toggle="pill" data-bs-target="#candidate" type="button" role="tab" aria-controls="candidate" aria-selected="true"><i class="icofont-businessman"></i> Candidate</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="employer-tab" data-bs-toggle="pill" data-bs-target="#employer" type="button" role="tab" aria-controls="employer" aria-selected="false"><i class="icofont-bag-alt"></i> Recruiter</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                      <div class="row">
                          <div class="col-12">
                              <input type="hidden" name="role_id" value="2">
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <input class="form-control" value="{{old('name')}}" name="name" type="text" placeholder="Name*">
                                  <span style="color: red">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                              </div>
                          </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" value="{{old('email')}}" name="email" type="email" placeholder="Email*">
                              <span style="color: red">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" name="password" type="password" placeholder="Password*">
                              <span style="color: red">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" name="confirmPassword" type="password" placeholder="Confirm Password*">
                              <span style="color: red">{{$errors->has('confirmPassword') ? $errors->first('confirmPassword') : ''}}</span>
                          </div>
                        </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <input class="form-control" name="phone" type="text" placeholder="Phone">
                              </div>
                          </div>
{{--                          @if ($errors->any())--}}
{{--                              @foreach ($errors->all() as $error)--}}
{{--                                  <p style="color: red">{{ $error }}</p>--}}
{{--                              @endforeach--}}
{{--                          @endif--}}
                        <div class="col-12">
                          <div class="form-group">
                            <div class="remember-forgot-info">
                              <div class="remember">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Accept our terms and conditions and privacy policy.</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <button type="submit" class="btn-theme">Register Now</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
{{--                    form dành cho recruiter--}}
                  <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">
                    <form action="#" method="post">
                        @csrf
                      <div class="row">
                          <div class="col-12">
                              <input type="hidden" name="role_id" value="3">
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <input class="form-control" name="name" type="text" placeholder="Name*">
                                  <span style="color: red">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                              </div>
                          </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Email*">
                              <span style="color: red">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" name="password" type="password" placeholder="Password*">
                              <span style="color: red">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" name="confirmPassword" type="password" placeholder="Confirm Password*">
                              <span style="color: red">{{$errors->has('confirmPassword') ? $errors->first('confirmPassword') : ''}}</span>
                          </div>
                        </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <input class="form-control" name="phone" type="text" placeholder="Phone">
                              </div>
                          </div>
                        <div class="col-12">
                          <div class="form-group">
                            <div class="remember-forgot-info">
                              <div class="remember">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Accept our terms and conditions and privacy policy.</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <button type="submit" class="btn-theme">Register Now</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="login-register-form-info">
                  <p>Already have an account? <a href="{{url ('login')}}">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Login Area Wrapper ==-->
  </main>
@endsection
