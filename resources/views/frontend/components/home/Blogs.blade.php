<div class="blog-feed-display-section section-gap-tb-165">
    <div class="blog-feed-display-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Start Section Content -->
                    <div class="section-content pos-relative text-center">
                        <span class="section-tag">Blog Post</span>
                        <h2 class="section-title">Latest Tips & Tricks</h2>
                    </div>
                    <!-- End Section Content -->
                </div>
            </div>

            <div class="blog-feed-display-wrapper">
                <div class="row mb-n5">




                    @php
                    $blogs = App\Models\Blog::with('category')->latest()->limit(3)->get();
                    @endphp

                    @foreach ( $blogs as $blog )


                    <div class="col-12 mb-5">
                        <!-- Start Blog Feed Single Item -->
                        <div class="blog-feed-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="blog-details-sidebar-left.html" class="image">
                                <img src="{{ asset($blog->image) }}" alt="">
                            </a>
                            <div class="content-box">
                                <div class="content">
                                    <div class="post-meta">
                                        <a href="#" class="catagory">
                                            <i class="icofont-folder"></i>
                                            {{ $blog->category['category'] }}

                                        </a>
                                        <a href="#" class="date">
                                            <i class="icofont-calendar"></i>
                                            {{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                                        </a>
                                    </div>
                                    <h4 class="title">
                                        <a href="{{ route('blog.single', ['id' => $blog->id]) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h4>
                                </div>
                                <a href="blog-details-sidebar-left.html"
                                    class="btn btn-md btn-outline-one icon-space-left">Read More<i
                                        class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- End Blog Feed Single Item -->
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>