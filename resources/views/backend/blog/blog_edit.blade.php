@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">Blog Page </h4>

            <form method="post" action="{{ route('update.blog') }}" enctype="multipart/form-data" id="blogForm">
              @csrf

              <input type="hidden" name="id" value="{{ $blog->id }}">

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog
                  Category</label>
                <div class="col-sm-10">

                  <select class="form-select" name="category_id" aria-label="Default select example">

                    <option selected=''>Open this select menu</option>
                    @foreach ($category as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $blog->category_id ? 'selected' : '' }}>
                      {{ $cat->category }}
                    </option>
                    @endforeach
                  </select>

                </div>
              </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                <div class="col-sm-10">
                  <input name="title" class="form-control" type="text" id="title"
                    value="{{ $blog->title }}">
                  @error('title')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                <div class="col-sm-10">
                  <input name="tags" class="form-control" type="text" id="tags" value="{{ $blog->tags }}">
                  @error('title')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">
                  Description</label>
                <div class="col-sm-10">
                  <textarea name="description" id="elm1" cols="30" rows="10">
                {{ $blog->description }}
                   </textarea>
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
                    src="{{ !empty($blog->image) ? url($blog->image) : url('upload/no_image.jpg') }}"
                    alt="Card image cap" >
                </div>
              </div>

              <!-- end row -->
              <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Blog Data">
            </form>

          </div>
        </div>
      </div> <!-- end col -->

    </div>

  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const blogForm = document.getElementById("blogForm");
    const titleInput = blogForm.querySelector("[name='title']");
    const tagsInput = blogForm.querySelector("[name='tags']");
    const descriptionInput = blogForm.querySelector("[name='description']");
    const imageInput = blogForm.querySelector("[name='image']");

    blogForm.addEventListener("submit", function(event) {
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

      if (imageInput.files.length > 0 && !isValidImageType(imageInput.files[0])) {
        toastr.error("Invalid image format. Please choose a valid image.");
        isValid = false;
      }

      if (!isValid) {
        event.preventDefault();
      }
    });


    function isValidImageType(file) {
      const acceptedImageTypes = ["image/jpeg", "image/png", "image/gif"];
      return acceptedImageTypes.includes(file.type);
    }
  });
</script>
@endsection