@extends('admin.admin_dashboard')

@section('admin')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 px-4 pt-5">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Brands List</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleVerticallycenteredModal">Add Services</button>
            @include('backend.service.add_service')
        </div>
    </div>
</div>


<div class="container">

    <hr />
    <h6 class="mb-0 text-uppercase">Supplier List</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>List</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableList">

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


@include('backend.service.update_service')

<script>

    
    $('#tableList').on('click', '.deleteBtn', function () {
    let id = $(this).data('id');

    // Trigger a custom SweetAlert confirmation dialog
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
           
            deleteItem(id);
        }
    });
});

    $(document).ready(function () {
        $('#tableList').on('click', '.editBtn', function () {

            let id = $(this).data('id');
                
              FillUpUpdateForm(id);
            $("#update-modal").modal('show');
        });
        $('#image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
        getList();
    });



    // getList();
    async function getList() {
    try {
        let res = await axios.get('/admin/service/list');
        console.log(res.data);

        let tableList = $('#tableList');
        tableList.empty();

        res.data.data.forEach(function (item, index) {
            let serviceList;

            // Check if service_list is a string representing a JSON array
            try {
                serviceList = JSON.parse(item['service_list']);
            } catch (e) {
                // If parsing fails, assume it's a plain string
                serviceList = [item['service_list']];
            }

            let serviceListHtml = serviceList.map(service => {
                return `<li>${service}</li>`;
            }).join('');

            let row = `<tr>
                            <td>${index + 1}</td>
                            <td>${item['title']}</td>
                            <td>${serviceListHtml}</td>
                            <td>
                                <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                                <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>`;
            tableList.append(row);
        });
    } catch (error) {
        console.error("Error fetching data:", error);
    }
}



async function deleteItem(id) {
    try {
        let res = await axios.delete(`/admin/services/${id}`, {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}', 
            },
        });
        if (res.status === 200) {
            toastr.success(res.data.message, 'Success');
            await getList();
        } else {
            errorToast('Something Went Wrong');
        }
    } catch (error) {
        console.error('Error deleting item:', error);
    }
}

</script>
@endsection