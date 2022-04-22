@extends('layouts.app')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="{{asset('assets/img/photos/bg2.webp')}}">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title">Create Job</h2>
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
                <div class="col-md-8 col-lg-7 col-xl-12">
                    <div class="login-register-form-wrap">
                        <div class="login-register-form">
                            <div class="form-title">
                                <h4 class="title">Update Job</h4>
                            </div>
                            <form action="{{route('posts.update',$post->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Recruitment Information</h4>
                                    </div>
                                    <div class="col-12">
                                        <label>Job Title<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            @error('title')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <input class="form-control" name="title" type="text" value="{{$post->title}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Job description<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            @error('content')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <textarea class="form-control" name="content" type="text">{{$post->content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Salary<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-6">
                                        <label>Job Type<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            @error('salary')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <input class="form-control" name="salary" type="text" value="{{$post->salary}}">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            @error('job_type')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <select class="form-control" name="job_type">
                                                <option value="Full time">Full time</option>
                                                <option value="Part time">Part time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Job level<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            @error('job_level')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <input class="form-control" name="job_level" type="text" value="{{$post->job_level}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Quantity<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            @error('quantity')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <input class="form-control" name="quantity" type="number" value="{{$post->quantity}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Gender<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            @error('gender')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <select class="form-control" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="all">All</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div>
                                            @error('address')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <label>Office<font style="color:red;">*</font></label>
                                            <select name="province_id" class="form-control">
                                                @foreach($provinces as $province)
                                                    <option value="{{$province->id}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Working experience<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            @error('experience')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <input class="form-control" type="text" name="experience" value="{{$post->experience}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Posting date<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            @error('posting_start')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <input class="form-control" type="date" name="posting_start" value="{{$post->posting_start}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Expired date<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            @error('posting_end')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <input class="form-control" type="date" name="posting_end" value="{{$post->posting_end}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Business Categories<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            @error('business_category_id')
                                            <p style="color: red">{{($message)}}</p>
                                            @enderror
                                            <select class="form-control" name="business_category_id" id="">
                                                @foreach($buns as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{$post->user_id}}">
                                    <input type="hidden" name="status_id" value="">

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
    <!--== End Login Area Wrapper ==-->
</main>
@endsection
