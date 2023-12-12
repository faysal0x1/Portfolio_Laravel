<div class="project-display-section section-gap-tb-165">
    <div class="project-display-box">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-12 d-block d-md-flex justify-content-between">
                    <!-- Start Section Content -->
                    <div class="section-content pos-relative">
                        <span class="section-tag">Awesome Portfolio</span>
                        <h2 class="section-title">My Complete Projects</h2>
                    </div>
                    <!-- End Section Content -->

                    <div class="default-nav-style mt-6 mb-6 mb-md-0 ">
                        <!-- If we need navigation buttons -->
                        <div class="slider-button button-prev"><i class="icofont-double-left"></i></div>
                        <div class="slider-button button-next"><i class="icofont-double-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-display-wrapper">
            <div class="project-display-slider">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @php
                        $projects = App\Models\Project::all();
                        @endphp
                        @foreach ($projects as $project)
                        <!-- Start Project Box Single Item -->
                        <div class="project-box-single-item swiper-slide">
                            <div class="img-box">
                                <div class="bg-overlay"></div>
                                <div class="bg-image">
                                    <img src="{{ asset($project->image) }}"
                                        alt="">
                                </div>
                                <div class="image">
                                    <img src="{{ asset($project->image) }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="project-details.html">{{ $project->name }}</a>
                                </h4>

                                <ul class="catagory-nav-item">
                                    <li>
                                        <a href="">Chairty</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Project Box Single Item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>