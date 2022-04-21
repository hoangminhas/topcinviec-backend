@extends('layouts.app')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title">Recruiter information detail</h2>
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
                                <h4 class="title">{{$recruiter->company_name}} information detail</h4>
                            </div>
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Recruiter Information</h4>
                                    </div>

                                    <div class="col-12">
                                        <label>Company Name</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="company_name" type="text" value="{{$recruiter->company_name}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Description</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="description" type="text" value="{{$recruiter->description}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="company_address" type="text" value="{{$recruiter->company_address}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Office</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="office" type="text" value="{{$recruiter->office}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Employees</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="employee" class="form-control" value="{{$recruiter->employee}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Profile Image</label>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="thumb">
                                                <img src="{{asset('image')}}/{{$recruiter->profile_image}}" width="160" height="160">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Banner Image</label>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="thumb">
                                                    <img src="{{asset('image')}}/{{$recruiter->banner_image}}" width="160" height="160" alt="Image-HasTech">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="user_id" value="2">
                                    <input type="hidden" name="status_id" value="1">
                                    <input type="hidden" name="business_category_id" value="1">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <a type="button" href="{{route('recruiters.index')}}" class="btn-theme">Back</a>
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
@endsection
