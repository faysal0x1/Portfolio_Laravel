@extends('frontend.app')

@section('content')

<!-- ...::: Start Breadcrumb Section :::... -->
<div class="breadcrumb-section section-bg overflow-hidden pos-relative">
    <div class="breadcrumb-shape-top-left"></div>
    <div class="breadcrumb-shape-bottom-right"></div>
    <div class="breadcrumb-box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Blog Details</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="blog-list.html">Blog</a></li>
                            <li class="active" aria-current="page">Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- ...::: Start Blog List Section :::... -->
<div class="blog-details-section section-gap-tb-165">
    <div class="blog-details-box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Blog Content Area -->
                    <div class="blog-content-area">
                        <!-- Start Section Content -->
                        <div class="default-content-style pos-relative">
                            <div class="content-meta">
                                <span class="section-tag">
                                    {{ $blog->category->category }}
                                </span>
                                <div class="post-meta-2">
                                    {{-- <span class="icon-space-right"><i class="icofont-ui-user"></i>by Mallie
                                        Short</span> --}}
                                    <span class="icon-space-right"><i class="icofont-calendar"></i>

                                        {{ Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}
                                    </span>
                                </div>
                            </div>
                            <h2 class="title">
                                {{ $blog->title }}
                            </h2>
                            <div>
                                {!! $blog->description !!}
                            </div>

                        </div>
                        <!-- End Section Content -->
                    </div>
                    <!-- End Blog Content Area -->

                    <!-- Start Tag Area  -->
                    <div class="tag-area section-mt-75">
                        <!-- Start Tag Box -->
                        <div class="tag-box">
                            <div class="left">
                                <ul class="social-link">
                                    <li><a href="../../../example.com/index.html" target="_blank"><i
                                                class="icofont-facebook"></i></a></li>
                                    <li><a href="../../../example.com/index.html" target="_blank"><i
                                                class="icofont-dribbble"></i></a></li>
                                    <li><a href="../../../example.com/index.html" target="_blank"><i
                                                class="icofont-linkedin"></i></a></li>
                                </ul>

                            </div>
                            <div class="right">
                                <div class="tag-list">
                                    {{-- <h5 class="title">Tags:</h5> --}}

                                    {{-- @php
                                    $tags = explode(',', $blog->tags);
                                    @endphp
                                    <ul class="list-item">


                                        @foreach ($tags as $tag)
                                        <li><a href="#">{{ $tag }}</a></li>
                                        @endforeach

                                    </ul> --}}



                                </div>
                            </div>
                        </div>
                        <!-- End Tag Box -->
                    </div>
                    <!--  End Tag Area  -->

                  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Blog List Section :::... -->


@endsection