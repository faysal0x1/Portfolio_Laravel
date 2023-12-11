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

        </div>
    </div>
</div>


<div class="container">

    <hr />
    <h6 class="mb-0 text-uppercase">Newsletter List</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Ability</th>
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
            let res = await axios.get('/admin/newsletter/lists');
            let tableList = $('#tableList');
            tableList.empty();

            res.data.forEach(function (item, index) {
                let row = `<tr>
                               <td>${index + 1}</td>
                               <td>${item['email']}</td>
                               <td>${item['status']}</td>
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
    
        let res = await axios.delete(`/admin/skills/${id}`, {
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