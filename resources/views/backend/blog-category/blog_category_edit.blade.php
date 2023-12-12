@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Blog Category Page </h4>

                        <form method="post" action="{{ route('update.blog.category') }}" id="updateCategoryForm">
                            @csrf

                            <input type="hidden" name="id" value="{{ $blog->id }}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category
                                    Name</label>
                                <div class="col-sm-10">
                                    <input name="category" class="form-control" type="text" id="example-text-input"
                                        value="{{ $blog->category }}">

                                    @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light"
                                value="Update Blog Category Data">
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->

        </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const updateCategoryForm = document.getElementById("updateCategoryForm");
    const categoryInput = updateCategoryForm.querySelector("[name='category']");

    updateCategoryForm.addEventListener("submit", function(event) {
      let isValid = true;

      if (categoryInput.value.trim() === "") {
        toastr.error("Please enter a category name.");
        isValid = false;
      }

      if (!isValid) {
        event.preventDefault();
      }
    });
  });
</script>
@endsection