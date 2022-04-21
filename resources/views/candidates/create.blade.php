@extends('layouts.app')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title">Candidate information</h2>
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
                                <h4 class="title">Information</h4>
                            </div>
                            <form action="{{route('candidates.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Candidate Information</h4>
                                    </div>

                                    <div class="col-12">
                                        <label>Experience<font style="color:red;">*</font></label>
                                    </div>
                                    @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('experience') }}</p>
                                    @endif
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="experience" type="text" value="">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Education</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="education" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Skills</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group col-3">
                                            <input class="form-control" name="skills" type="text" value="">
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
                                            <input name="profile_image" type="file" value="">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Resume<font style="color:red;">*</font></label>
                                    </div>
                                    @if ($errors->any())
                                        <p style="color:red">{{ $errors->first('resume') }}</p>
                                    @endif
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="resume" type="file" value="">
                                        </div>
                                    </div>

                                    <input type="hidden" name="user_id" value="2">
                                    <input type="hidden" name="status_id" value="1">
{{--                                    <input type="hidden" name="business_category_id" value="1">--}}

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
    <script>
        jQuery(document).ready(function() {
            jQuery('.province_id').on('change', function() {
                var province_id = jQuery(this).val();

                $.ajax({
                    url: "/api/get_districts/"+province_id,
                    type: "GET",
                    success: function(data) {
                        var districts_html = '<option value="">Select district</option>';
                        for (const district of data) {
                            districts_html += '<option value="' + district.id + '">' + district.name + '</option>';
                        }
                        jQuery('.district_id').html(districts_html);
                    }
                });

            });
            jQuery('.district_id').on('change', function() {
                var district_id = jQuery(this).val();

                $.ajax({
                    url: "/api/get_wards/" + district_id,
                    type: "GET",
                    success: function(data) {
                        var wards_html = '<option value="">Select ward</option>';
                        for (const ward of data) {
                            wards_html += '<option value="' + ward.id + '">' + ward.name +
                                '</option>';
                        }
                        jQuery('.ward_id').html(wards_html);
                    }
                });
            });
        });
    </script>
</main>
@endsection
