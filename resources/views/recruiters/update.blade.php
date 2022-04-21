@extends('layouts.app')
@section('content')
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
                            <form action="{{route('recruiters.update',$recruiter->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Recruiter Information</h4>
                                    </div>

                                    <div class="col-12">
                                        <label>Company Name<font style="color:red;">*</font></label>
                                    </div>
                                    @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('company_name') }}</p>
                                    @endif
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="company_name" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->company_name}}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Description</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="description" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->description}}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="company_address" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->company_address}}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Office</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="office" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->office}}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Employees</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <select class="form-control" name="employee">
                                                <option value="20 - 30">20 - 30</option>
                                                <option value="31 - 100">31 - 100</option>
                                                <option value="101 - 200">101 - 200</option>
                                                <option value="201 - 300">201 - 300</option>
                                                <option value="300+">300+</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Profile Image<font style="color:red;">*</font></label>
                                    </div>
                                    @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('profile_image') }}</p>
                                    @endif
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="profile_image" type="file" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->profile_image}}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Banner Image<font style="color:red;">*</font></label>
                                    </div>
                                    @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('banner_image') }}</p>
                                    @endif
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="banner_image" type="file" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->banner_image}}">
                                        </div>
                                    </div>

                                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->user_id}}">
                                    <input type="hidden" name="status_id" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->status_id}}">
                                    <input type="hidden" name="business_category_id" value="{{\Illuminate\Support\Facades\Auth::user()->recruiter->business_category_id}}">

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
@endsection
