@extends('layouts.app')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Candidate</h2>
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
          <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <!--== Start Team Item ==-->
              @foreach($candidates as $candidate)
            <div class="team-item">
              <div class="thumb">
                <a href="../candidate-details.blade.php">
                  <img src="assets/img/team/1.webp" width="160" height="160" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h4 class="title"><a href="../candidate-details.blade.php">Lauran Benitez</a></h4>
                  <h5 class="sub-title">Web Designer</h5>
                  <h5 class="sub-title"><?= $candidate->education?></h5>
                <div class="rating-box">
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                <p class="desc"><?= $candidate->experience ?></p>
                <a class="btn-theme btn-white btn-sm" href="../candidate-details.blade.php">View Profile</a>
              </div>
              <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.webp" alt="Image-HasTech"></div>
              <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.webp" alt="Image-HasTech"></div>
            </div>
              @endforeach
            <!--== End Team Item ==-->
          </div>

        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="pagination-area">
              <nav>
                <ul class="page-numbers d-inline-flex">
                  <li>
                    <a class="page-number active" href="list.blade.php">1</a>
                  </li>
                  <li>
                    <a class="page-number" href="list.blade.php">2</a>
                  </li>
                  <li>
                    <a class="page-number" href="list.blade.php">3</a>
                  </li>
                  <li>
                    <a class="page-number next" href="list.blade.php">
                      <i class="icofont-long-arrow-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Team Area Wrapper ==-->
  </main>
@endsection
