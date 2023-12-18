<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home Default || Inbio - Personal Portfolio Bootstrap-5 Template</title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
  <!-- CSS
    ============================================ -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/feature.css') }}">
  <!-- Style css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

  

    @include('frontend.body.header')

    <!-- Offcanvas Overlay -->
    <main class="main-page-wrapper">

      @yield('content')
      <!-- Back to  top Start -->
      <div class="backto-top">
        <div>
          <i data-feather="arrow-up"></i>
        </div>
      </div>
      <!-- Back to top end -->
      <!-- Start Right Demo  -->
      <div class="rn-right-demo">
        <button class="demo-button">
          <span class="text">Demos</span>
        </button>
      </div>
      <!-- End Right Demo  -->

      <!-- Start Modal Area  -->
      <div class="demo-modal-area">
        <div class="wrapper">
          <div class="close-icon">
            <button class="demo-close-btn"><span class="feather-x"></span></button>
          </div>
          <div class="rn-modal-inner">
            <div class="demo-top text-center">
              <h4 class="title">InBio</h4>
              <p class="subtitle">Its a personal portfolio template. You can built any personal website easily.</p>
            </div>
            <ul class="popuptab-area nav nav-tabs" id="popuptab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active demo-dark" id="demodark-tab" data-bs-toggle="tab" href="inbio.html#demodark"
                  role="tab" aria-controls="demodark" aria-selected="true">Dark Demo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link demo-light" id="demolight-tab" data-bs-toggle="tab" href="inbio.html#demolight"
                  role="tab" aria-controls="demolight" aria-selected="false">Light Demo</a>
              </li>
            </ul>
            <div class="tab-content" id="popuptabContent">
              <div class="tab-pane show active" id="demodark" role="tabpanel" aria-labelledby="demodark-tab">
                <div class="content">
                  <div class="row">

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="index.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/main-demo.png') }}" alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index.html">Main Demo</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-2">
                          <div class="thumbnail">
                            <a href="index-technician.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/index-technician.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-technician.html">Technician</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-2">
                          <div class="thumbnail">
                            <a href="index-model.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-model-v2.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-model.html">Model</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-1">
                          <div class="thumbnail">
                            <a href="home-consulting.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-consulting.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-consulting.html">Consulting</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-1">
                          <div class="thumbnail">
                            <a href="fashion-designer.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/fashion-designer.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="fashion-designer.html">Fashion Designer</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="index-developer.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/developer.png') }}" alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-developer.html">Developer</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="instructor-fitness.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/instructor-fitness.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="instructor-fitness.html">Fitness Instructor</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->
                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-1">
                          <div class="thumbnail">
                            <a href="https://rainbowit.net/html/inbio/home-web-Developer.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-model.png') }}" alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="https://rainbowit.net/html/inbio/home-web-Developer.html">Web
                                Developer</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-designer.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-video.png') }}" alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-designer.html">Designer</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-content-writer.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/text-rotet.png') }}" alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-content-writer.html">Content Writter</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-instructor.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/index-boxed.png') }}" alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-instructor.html">Instructor</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-freelancer.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-sticky.png') }}" alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-freelancer.html">Freelancer</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-photographer.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/index-bg-image.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-photographer.html">Photographer</a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="index-politician.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/front-end.png') }}" alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-politician.html">Politician</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo coming-soon">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="inbio.html#">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/coming-soon.png') }}" alt="Personal Portfolio">
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="inbio.html#">Accountant</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                  </div>
                </div>
              </div>

              <div class="tab-pane" id="demolight" role="tabpanel" aria-labelledby="demolight-tab">
                <div class="content">
                  <div class="row">

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="index-white-version_2.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/main-demo-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-white-version_2.html">Main Demo</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-2">
                          <div class="thumbnail">
                            <a href="index-technician-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/index-technician-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-technician-white-version.html">Technician</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-2">
                          <div class="thumbnail">
                            <a href="index-model-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-model-v2-white.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-model-white-version.html">Model</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-1">
                          <div class="thumbnail">
                            <a href="home-consulting-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-consulting-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-consulting-white-version.html">Consulting</a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-1">
                          <div class="thumbnail">
                            <a href="fashion-designer-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/fashion-designer-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="fashion-designer-white-version.html">Fashion Designer</a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="index-developer-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/developer-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-developer-white-version.html">Developer</a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->
                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="instructor-fitness-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/instructor-fitness-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="instructor-fitness-white-version.html">Fitness Instructor</a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->
                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner badge-1">
                          <div class="thumbnail">
                            <a href="home-web-developer-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-model-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-web-developer-white-version.html">Web Developer</a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-designer-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-video-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-designer-white-version.html">Designer</a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-content-writer-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/text-rotet-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-content-writer-white-version.html">Content
                                Writter</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-instructor-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/index-boxed-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-instructor-white-version.html">Instructor</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-freelancer-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/home-sticky-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-freelancer-white-version.html">Freelancer</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="home-photographer-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/index-bg-image-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="home-photographer-white-version.html">Photographer</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="index-politician-white-version.html">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/front-end-white-version.png') }}"
                                alt="Personal Portfolio">
                              <span class="overlay-content">
                                <span class="overlay-text">View Demo <i class="feather-external-link"></i></span>
                              </span>
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="index-politician-white-version.html">Politician</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                    <!-- Start Single Content  -->
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="single-demo coming-soon">
                        <div class="inner">
                          <div class="thumbnail">
                            <a href="inbio.html#">
                              <img class="w-100" src="{{ asset('frontend/assets/images/demo/coming-soon.png') }}" alt="Personal Portfolio">
                            </a>
                          </div>
                          <div class="inner">
                            <h3 class="title"><a href="inbio.html#">Accountant</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Content  -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Area  -->

    </main>

    <!-- ...::: Start Footer Section :::... -->
    @include('frontend.body.footer')
    <!-- ...::: End Footer Section :::... -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
  </main>

  <!-- =========  JS Files ========= -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    @if (Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}"
      switch (type) {
        case 'info':
          toastr.info(" {{ Session::get('message') }} ");
          break;

        case 'success':
          toastr.success(" {{ Session::get('message') }} ");
          break;

        case 'warning':
          toastr.warning(" {{ Session::get('message') }} ");
          break;

        case 'error':
          toastr.error(" {{ Session::get('message') }} ");
          break;
      }
    @endif
  </script>
  <!-- End Footer Area -->
  <!-- JS ============================================ -->

  <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/modernizer.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/feather.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/slick.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/bootstrap.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/text-type.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/wow.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/particles.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/vendor/jquery-one-page-nav.js') }}"></script>
  <!-- main JS -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

  <script>
    particlesJS('particles-js',

      {
        "particles": {
          "number": {
            "value": 20,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": ["#ffffff", ]
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 4
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.8,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 4,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": false,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 800,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      }

    );
  </script>
</body>

</html>
