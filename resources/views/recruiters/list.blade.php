@extends('layouts.app')
@section('content')
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.webp">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title">Recruiter</h2>
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
        <section class="team-area team-inner2-area">
            <div class="container">
                <div class="row">
                    @foreach($recruiters as $recruiter)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <!--== Start Team Item ==-->
                            <div class="team-item">
                                <div class="thumb">
                                    <a href="{{route('recruiters.detail', $recruiter->id)}}">
                                        <img src="{{asset('image')}}/{{$recruiter->profile_image}}" width="160"
                                             height="160" alt="Image-HasTech">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a
                                            href="../candidate-details.blade.php">{{$recruiter->company_name}}</a></h4>
                                    <h5 class="sub-title">{{$recruiter->description}}</h5>
                                    <a class="btn-theme btn-white btn-sm"
                                       href="{{route('recruiters.detail', $recruiter->id)}}">View Profile</a>
                                </div>
                                <div class="bookmark-icon"><img src="{{asset('assets/img/icons/bookmark1.webp')}}"
                                                                alt="Image-HasTech"></div>
                                <div class="bookmark-icon-hover"><img
                                        src="{{asset('assets/img/icons/bookmark2.webp')}}"></div>
                            </div>
                            <!--== End Team Item ==-->
                        </div>
                    @endforeach

                </div>
                <div class="col-12 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination ">
                            <span aria-hidden="true"> {{ $recruiters->links() }}</span>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--== End Team Area Wrapper ==-->
    </main>
@endsection
