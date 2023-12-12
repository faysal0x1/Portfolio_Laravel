<div class="skill-display-section section-gap-tb-165 section-bg pos-relative">
    <div class="skill-display-section-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-xxl-5">
                    <!-- Start Section Content -->
                    <div class="section-content">
                        <span class="section-tag">Special Skills</span>
                        <h2 class="section-title">My Special Skill Field Here.</h2>

                        <a href="#" class="btn btn-xl btn-outline-one icon-space-left">Get Resume <i
                                class="icofont-download"></i></a>
                    </div>
                    <!-- End Section Content -->
                </div>

                <div class="col-xl-6 col-xxl-6 offset-xxl-1">
                    <!-- Start Skill Display Wrapper -->
                    <div id="skillsContainer" class="skill-display-wrapper">


                        @php
                        $skills = App\Models\Skill::all();
                        @endphp
                        @foreach ($skills as $skill)
                        <!-- Start Skill Progress Single Item -->
                        <div class="skill-progress-single-item">
                            <span class="tag">{{ $skill['title'] }}</span>
                            <div class="skill-box">
                                <div class="progress-line" data-width="{{ $skill['rate'] }}">
                                    <span class="skill-percentage">{{ $skill['rate'] }}%</span>
                                </div>
                            </div>
                        </div>
                        <!-- ENd Skill Progress Single Item -->
                        @endforeach





                    </div>
                    <!-- End Skill Display Wrapper -->
                </div>
            </div>
        </div>
    </div>
    <div class="skill-display-shape"></div>
</div>