@extends('layouts.header')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title">Job Details</h2>
                        <nav class="breadcrumb-area">
                            <ul class="breadcrumb justify-content-center">
                                <li><a href="index.blade.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Job Details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Job Details Area Wrapper ==-->
    <section class="job-details-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="job-details-wrap">
                        <div class="job-details-info">
                            <div class="thumb">
                                <img src="assets/img/companies/10.webp" width="130" height="130" alt="Image-HasTech">
                            </div>
                            <div class="content">
                                <h4 class="title">{{$post->user->name ?? ''}}</h4>
                                <h5 class="sub-title">{{$post->user->email ?? ''}}</h5>
                                <ul class="info-list">
                                    <li><i class="icofont-location-pin"></i> {{$post->user->address_detail ?? ''}}</li>
                                    <li><i class="icofont-phone"></i> {{$post->user->phone ?? ''}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="job-details-item">
                        <div class="content">
                            <h4 class="title">Work Content</h4>
                            <h5>{{$post->title ?? ''}}</h5>
                            <p>{{$post->content ?? ''}}</p>
                        </div>
                        <div class="content">
                            <h4 class="title">Working Hours</h4>
                            <ul class="job-details-list">
                                <li><i class="icofont-check"></i> 8:00 AM - 5:00 PM</li>
                                <li><i class="icofont-check"></i> Weekly: 5 days.</li>
                                <li><i class="icofont-check"></i> Weekend: Saturday, Sunday.</li>
                            </ul>
                        </div>
                        <div class="content">
                            <h4 class="title">Benefits</h4>
                            <ul class="job-details-list">
                                <li><i class="icofont-check"></i> Work in a flat organization where your voice is always
                                    heard.
                                </li>
                                <li><i class="icofont-check"></i> Provident fund.</li>
                                <li><i class="icofont-check"></i> Gratuity.</li>
                                <li><i class="icofont-check"></i> Medical Fund.</li>
                                <li><i class="icofont-check"></i> Having Corporate deals with multiple Hospitals.</li>
                                <li><i class="icofont-check"></i> Performance bonus.</li>
                                <li><i class="icofont-check"></i> Increment: Yearly.</li>
                                <li><i class="icofont-check"></i> Festival Bonus: 2 (Yearly)</li>
                                <li><i class="icofont-check"></i> Lunch Facilities: Full Subsidize.</li>
                                <li><i class="icofont-check"></i> Unlimited Tea, Coffee & Snacks.</li>
                                <li><i class="icofont-check"></i> Annual tour.</li>
                                <li><i class="icofont-check"></i> Team Outing.</li>
                                <li><i class="icofont-check"></i> Marriage Bonus and Marriage Leave.</li>
                                <li><i class="icofont-check"></i> Paternity and Maternity Leave.</li>
                                <li><i class="icofont-check"></i> Yearly Family Tour.</li>
                                <li><i class="icofont-check"></i> Knowledge Sharing Session.</li>
                                <li><i class="icofont-check"></i> Leave Encashment Facilities.</li>
                                <li><i class="icofont-check"></i> Work with a vibrant team and amazing products.</li>
                                <li><i class="icofont-check"></i> Table Tennis(Ping Pong) :table_tennis_paddle_and_ball:
                                </li>
                                <li><i class="icofont-check"></i> Training and learning materials to improve skills.
                                </li>
                                <li><i class="icofont-check"></i> Last but not the least, WorldClass Work Environment.
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h4 class="title">Statement</h4>
                            <p class="desc">Finate is committed to creating the happiest company working for and is
                                proud to provide equal opportunity to all. All the qualified applicants will receive
                                consideration for employment without regard to race, color, ancestry, religion, sex,
                                sexual orientation, age, citizenship, marital status, disability, gender identity, or
                                any other basis protected by federal, state, or local law.</p>
                            <a class="btn-apply-now" href="contact.blade.php">Apply Now <i
                                    class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-5 col-xl-4">
                    <div class="job-sidebar">
                        <div class="widget-item">
                            <div class="widget-title">
                                <h3 class="title">Summery</h3>
                            </div>
                            <div class="summery-info">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="table-name">Job Type</td>
                                        <td class="dotted">:</td>
                                        <td data-text-color="#03a84e">{{$post->job_type ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-name">Category</td>
                                        <td class="dotted">:</td>
                                        <td data-text-color="#03a84e">{{$post->businessCategory->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="table-name">Quantity</td>
                                        <td class="dotted">:</td>
                                        <td>{{$post->quantity ?? ''}}People</td>
                                    </tr>
                                    <tr>
                                        <td class="table-name">Posted</td>
                                        <td class="dotted">:</td>
                                        <td>{{$post->posting_start ?? ''}}</td>
                                    </tr>
                                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role_id !== 1)
                                        <tr>
                                            <td class="table-name">Salary</td>
                                            <td class="dotted">:</td>
                                            <td>{{$post->salary ?? ''}} / Monthly</td>
                                        </tr>
                                    @endif
                                        <tr>
                                            <td class="table-name">Experience</td>
                                            <td class="dotted">:</td>
                                            <td>{{$post->experience ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="table-name">Gender</td>
                                            <td class="dotted">:</td>
                                            <td>{{$post->gender ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="table-name">Level</td>
                                            <td class="dotted">:</td>
                                            <td>{{$post->job_level ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="table-name">Expired</td>
                                            <td class="dotted">:</td>
                                            <td data-text-color="#ff6000">{{$post->posting_end ?? ''}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="widget-item">
                            <div class="widget-title">
                                <h3 class="title">Share With</h3>
                            </div>
                            <div class="social-icons">
                                <a href="https://www.facebook.com" target="_blank" rel="noopener"><i
                                        class="icofont-facebook"></i></a>
                                <a href="https://twitter.com" target="_blank" rel="noopener"><i
                                        class="icofont-twitter"></i></a>
                                <a href="https://www.skype.com" target="_blank" rel="noopener"><i
                                        class="icofont-skype"></i></a>
                                <a href="https://www.pinterest.com" target="_blank" rel="noopener"><i
                                        class="icofont-pinterest"></i></a>
                                <a href="https://dribbble.com/" target="_blank" rel="noopener"><i
                                        class="icofont-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="widget-item widget-tag">
                            <div class="widget-title">
                                <h3 class="title">Tags:</h3>
                            </div>
                            <div class="widget-tag-list">
                                <a href="job.blade.php">Cleaning</a>
                                <a href="job.blade.php">Cleaning Agency</a><br>
                                <a href="job.blade.php">Business</a>
                                <a href="job.blade.php">Cleaning</a>
                                <a href="job.blade.php">Business</a>
                                <a href="job.blade.php">Cleaning</a>
                                <a href="job.blade.php">Cleaning Agency</a>
                                <a href="job.blade.php">Business</a>
                                <a href="job.blade.php">Cleaning Agency</a>
                                <a href="job.blade.php">Cleaning</a>
                                <a href="job.blade.php">Business</a>
                                <a href="job.blade.php">Business</a>
                                <a href="job.blade.php">Cleaning Agency</a>
                                <a href="job.blade.php">Business</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@extends('layouts.footer')
