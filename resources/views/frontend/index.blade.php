@extends('frontend.app')

@section('content')

{{-- Hero Section --}}

@include('frontend.components.home.hero')
<!-- ...::: End Hero Section :::... -->

<!-- ...::: Start Service Display Section :::... -->
@include('frontend.components.home.service')
<!-- ...::: End Service Display Section :::... -->

<!-- ...::: Start Skill Display Section :::... -->
@include('frontend.components.home.Skills')
<!-- ...::: End Skill Display Section :::... -->

<!-- ...::: Start Counter Display Section :::... -->
{{-- <div class="counter-display-section section-gap-tb-165 section-bg-2">
    <div class="counter-display-wrapper">
        <div class="container">
            <div class="row justify-content-center justify-content-sm-start">
                <div class="d-block d-md-flex justify-content-md-start col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icon/counterup-icon-1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">2,58</span>+</h2>
                            <span class="text">Happy Clients</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div>
                <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icon/counterup-icon-2.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">590</span>K</h2>
                            <span class="text">Project Complete</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div>
                <div class="d-block d-md-flex justify-content-md-end col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icon/counterup-icon-3.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">28</span>+</h2>
                            <span class="text">Years of Experience</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- ...::: End Counter Display Section :::... -->

<!-- ...::: Start Project Display Section :::... -->
@include('frontend.components.home.Projects')
<!-- ...::: End Project Display Section :::... -->

<!-- ...::: Start Testimonial Display Section :::... -->
{{-- <div class="testimonial-display-section section-gap-tb-165 section-bg">
    <div class="testimonial-display-box d-flex flex-column align-items-center d-xl-block pos-relative">
        <div class="container overflow-hidden">
            <div class="row">
                <div class="col d-xl-flex justify-content-xl-end">
                    <!-- Start Section Content -->
                    <div class="section-content pos-relative">
                        <span class="section-tag">Testimonial</span>
                        <h2 class="section-title">Satisfied Clients Say</h2>
                    </div>
                    <!-- End Section Content -->
                </div>
            </div>

            <div class="testimonial-display-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-display-slider">
                            <!-- Swiper -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- Start testimonial Slider Single Item -->
                                    <div class="testimonial-slider-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="content">
                                            <span class="icon">“</span>
                                            <p class="text">Lorem Ipsum simpy dummy
                                                text of the printing and types
                                                industry has been the industr
                                                standard dummy.</p>
                                            <div class="info">
                                                <div class="author">
                                                    <h4 class="name">Raleigh Friend</h4>
                                                    <span class="designation">CEO, Seoly</span>
                                                </div>
                                                <ul class="review">
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="blank"><i class="icofont-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End testimonial Slider Single Item -->
                                    <!-- Start testimonial Slider Single Item -->
                                    <div class="testimonial-slider-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="content">
                                            <span class="icon">“</span>
                                            <p class="text">Lorem Ipsum simpy dummy
                                                text of the printing and types
                                                industry has been the industr
                                                standard dummy.</p>
                                            <div class="info">
                                                <div class="author">
                                                    <h4 class="name">Raleigh Friend</h4>
                                                    <span class="designation">CEO, Seoly</span>
                                                </div>
                                                <ul class="review">
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="blank"><i class="icofont-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End testimonial Slider Single Item -->
                                    <!-- Start testimonial Slider Single Item -->
                                    <div class="testimonial-slider-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="content">
                                            <span class="icon">“</span>
                                            <p class="text">Lorem Ipsum simpy dummy
                                                text of the printing and types
                                                industry has been the industr
                                                standard dummy.</p>
                                            <div class="info">
                                                <div class="author">
                                                    <h4 class="name">Raleigh Friend</h4>
                                                    <span class="designation">CEO, Seoly</span>
                                                </div>
                                                <ul class="review">
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="fill"><i class="icofont-star"></i></li>
                                                    <li class="blank"><i class="icofont-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End testimonial Slider Single Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-nav-style mt-5 mt-xl-0">
            <!-- If we need navigation buttons -->
            <div class="slider-button button-prev"><i class="icofont-double-left"></i></div>
            <div class="slider-button button-next"><i class="icofont-double-right"></i></div>
        </div>
    </div>
</div> --}}
<!-- ...::: End Testimonial Display Section :::... -->

<!-- ...::: Start Company Logo Display Section :::... -->
{{-- <div class="company-logo-display section-mt-165 ">
    <div class="company-logo-display-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Start Section Content -->
                    <div class="section-content pos-relative">
                        <span class="section-tag">Favourite Clients</span>
                        <h2 class="section-title">Work With Trusted Comapny.</h2>
                    </div>
                    <!-- End Section Content -->
                </div>
            </div>

            <div class="company-logo-display-wrapper">
                <div class="row">
                    <div class="col">
                        <div class="company-logo-display-slider">
                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Start Company Logo Slider Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <a href="#" class="image">
                                            <img src="{{ asset('frontend/assets/images/company-logo/company-logo-1.png') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assets/images/company-logo/1.png') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- End Company Logo Slider Single Item -->
                                    <!-- Start Company Logo Slider Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <a href="#" class="image">
                                            <img src="{{ asset('frontend/assets/images/company-logo/company-logo-2.png') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assets/images/company-logo/2.png') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- End Company Logo Slider Single Item -->
                                    <!-- Start Company Logo Slider Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <a href="#" class="image">
                                            <img src="{{ asset('frontend/assets/images/company-logo/company-logo-3.png') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assets/images/company-logo/3.png') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- End Company Logo Slider Single Item -->
                                    <!-- Start Company Logo Slider Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <a href="#" class="image">
                                            <img src="{{ asset('frontend/assets/images/company-logo/company-logo-4.png') }}"
                                                alt="">
                                            <img src="{{ asset('frontend/assets/images/company-logo/4.png') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- End Company Logo Slider Single Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- ...::: End Company Logo Display Section :::... -->

<!-- ...::: Start Blog Feed Display Section :::... -->
@include('frontend.components.home.Blogs')
<!-- ...::: End Blog Feed Display Section :::... -->
@endsection