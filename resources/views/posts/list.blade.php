@extends('layouts.app')

@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title">Recruitment News</h2>
                        <nav class="breadcrumb-area">
                            <ul class="breadcrumb justify-content-center">
                                <li></li>
                                <li class="breadcrumb-sep"></li>
                                <li></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-grid-area">
        <div class="container">
            <div class="row justify-content-between flex-xl-row-reverse">
                <div class="col-xl-8">
                    <div class="row row-gutter-70">
                        @foreach($posts as $post)
                            <div class="col-sm-6 col-lg-4 col-xl-6">
                                <!--== Start Blog Post Item ==-->
                                <div class="post-item">
                                    <div class="thumb">
                                        {{--                                    <a href="blog-details.blade.php"><img src="assets/img/blog/7.webp" alt="Image" width="30" height="30"></a>--}}
                                    </div>
                                    <div class="content">

                                        <h4 class="title"><a href="{{route('posts.detail',$post->id)}}">{{$post->title}}</a></h4>
                                        <p>{{$post->content}}</p>
                                        <div class="meta">
                                            <span class="post-date">{{$post->user->name}}</span>
                                            <span class="dots"></span>
                                            <span class="post-time"><span style="color: red ">Expire:</span> {{$post->posting_end}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Blog Post Item ==-->
                            </div>
                        @endforeach
                        <div class="col-12 text-left">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <span aria-hidden="true"> {{ $posts->links() }}</span>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="blog-sidebar blog-sidebar-left">
                        <div class="widget-item">
                            <div class="widget-body">
                                <div class="widget-search-box">
                                    <form action="{{route('searchJob')}}" method="get">
                                        <div class="form-input-item">
                                            <input name="search" type="search" id="search2" placeholder="Search here">
                                            <button type="submit" class="btn-src">
                                                <i class="icofont-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
{{--                        <div class="widget-item">--}}
{{--                            <div class="widget-title">--}}
{{--                                <h3 class="title">Post Category</h3>--}}
{{--                            </div>--}}
{{--                            <div class="widget-body">--}}
{{--                                <div class="widget-categories">--}}
{{--                                    <ul>--}}
{{--                                        @foreach($business_categories as $business_category)--}}
{{--                                            <li><a href="job.blade.php">{{$business_category->name}}</a></li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="widget-item">--}}
{{--                            <div class="widget-title">--}}
{{--                                <h3 class="title">Recent Post</h3>--}}
{{--                            </div>--}}
{{--                            <div class="widget-body">--}}
{{--                                <div class="widget-post">--}}
{{--                                    @foreach($recent_posts as $recent_post)--}}
{{--                                        <div class="widget-blog-post">--}}
{{--                                            <div class="thumb">--}}
{{--                                                <a href="blog-details.blade.php"><img src="assets/img/blog/s1.webp" alt="Image" width="71" height="70"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="content">--}}
{{--                                                <h4><a href="{{route('posts.detail',$recent_post->id)}}">{{$recent_post->title}}</a></h4>--}}
{{--                                                <div class="meta">--}}
{{--                                                    <span class="post-date"><i class="icofont-ui-calendar"></i> {{$recent_post->posting_start}}</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
</main>
@endsection

