@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Blog Category Page </h4>

                            <form method="post" action="{{ route('store.blog.category') }}" id="blogCategoryForm">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input name="category" class="form-control" type="text" id="">

                                        @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                       value="Insert Blog Category Data">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->

            </div>

        </div>
    </div>

    <script>

        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("blogCategoryForm");
            const categoryInput = form.querySelector("[name='category']");

            form.addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent the form from submitting

                const categoryValue = categoryInput.value.trim();
                if (categoryValue === "") {
                    toastr.error("Please enter a category name");
                    return;
                }

                if (categoryValue.length < 2) {
                    toastr.error("Category name must be at least 2 characters long");
                    return;
                }

                if (categoryValue.length > 255) {
                    toastr.error("Category name cannot exceed 255 characters");
                    return;
                }
                form.submit();
            });
        });
    </script>
@endsection
