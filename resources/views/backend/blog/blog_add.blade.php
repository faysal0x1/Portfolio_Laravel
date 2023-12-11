@extends('admin.admin_dashboard')

@section('admin')
    <style type="text/css">
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: red !important;
            font-weight: bold !important;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Blog Page </h4>

                            <form method="post" action="{{ route('store.blog') }}" enctype="multipart/form-data"
                                  id="blogForm">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog
                                        Category</label>
                                    <div class="col-sm-10">

                                        <select class="form-select" name="category_id"
                                                aria-label="Default select example">

                                            <option selected="" disabled>Open this select menu</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text" id="example-text-input">
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                                    <div class="col-sm-10 ">

                                        <input name="tags" value="home,tech" class="form-control" type="text"
                                               data-role="tagsinput">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog
                                        Description</label>
                                    <div class="col-sm-10">

                                        <textarea name="description" id="elm1" cols="30" rows="10"></textarea>
                    
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <!-- end row -->

                                <div class=" row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" class="form-control" type="file" id="image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-10">

                                        <img id="showImage" class="rounded avatar-lg"
                                             src="{{ !empty($aboutPage->about_image) ? url($aboutPage->about_image) : url('upload/no_image.jpg') }}"
                                             style="width:100px; height: 100px;"
                                             alt="Card image cap">
                                    </div>
                                </div>

                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                       value="Insert Blog Data">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->

            </div>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const blogForm = document.getElementById("blogForm");
            const titleInput = blogForm.querySelector("[name='title']");
            const tagsInput = blogForm.querySelector("[name='tags']");
            const descriptionInput = blogForm.querySelector("[name='description']");
            const imageInput = blogForm.querySelector("[name='image']");

            blogForm.addEventListener("submit", function (event) {
                let isValid = true;

                if (titleInput.value.trim() === "") {
                    toastr.error("Please enter a title.");
                    isValid = false;
                }
                if (tagsInput.value.trim() === "") {
                    toastr.error("Please enter tags.");
                    isValid = false;
                }
                if (descriptionInput.value.trim() === "") {
                    toastr.error("Please enter a description.");
                    isValid = false;
                }
                if (!imageInput.files || !imageInput.files[0]) {
                    toastr.error("Please choose an image.");
                    isValid = false;
                }
                if (!isValid) {
                    event.preventDefault();
                }
            });
        });
    </script>

@endsection
