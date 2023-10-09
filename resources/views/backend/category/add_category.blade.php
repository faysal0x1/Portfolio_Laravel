@extends('admin.admin_dashboard')

@section('admin')


<div class="page-breadcrumb d-none d-sm-flex align-items-center  mt-5 pt-3 ms-5">
    <div class="breadcrumb-title pe-3">Admin Profile</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
        </nav>
    </div>


</div>


<div class="container">
    <div class="main-body">
        <div class="row">

            <div class="col-lg-10 ms-auto me-auto mt-2 h-a">
                <div class="card h-full">
                    <div class="card-body">
                        <form method="POST" action="{{ route('store.category') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">category Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="category_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">category Image</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="category_image" class="form-control" type="file" id="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Image Preview</h6>
                                </div>
                                <div class="col-sm-9">

                                    <img id="showImage" class="rounded-circle p-1 bg-primary" style="width:100px; height: 100px;" src="{{ !empty($aboutPage->about_image) ? url($aboutPage->about_image) : url('upload/no_image.jpg') }}" alt="Card image cap">
                                </div>
                            </div>


                            


                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>
@endsection
