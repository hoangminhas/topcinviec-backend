@extends('layouts.header')

<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title">Recruiter information update</h2>
                        <nav class="breadcrumb-area">
                            <ul class="breadcrumb justify-content-center">
                                <li><a href="../index.blade.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Candidate</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    <section class="account-login-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-12">
                    <div class="login-register-form-wrap">
                        <div class="login-register-form">
                            <div class="form-title">
                                <h4 class="title">Update Information</h4>
                            </div>
                            <form action="{{route('recruiters.update',$recruiter->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Recruiter Information</h4>
                                    </div>
                                    <div class="col-12">
                                        <label>Profile Image<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="profile_image" type="text" value="{{$recruiter->profile_image}}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Banner Image<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="banner_image" type="text" value="{{$recruiter->banner_image}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{$recruiter->user_id}}">
                                    <input type="hidden" name="status_id" value="{{$recruiter->status_id}}">
                                    <input type="hidden" name="business_category_id" value="{{$recruiter->business_category_id}}">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-theme">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Team Area Wrapper ==-->
</main>
@extends('layouts.footer')
