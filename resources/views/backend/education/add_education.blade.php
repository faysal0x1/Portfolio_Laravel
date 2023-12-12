<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Skills</h5>
                <button type="button" id="add-modal-close" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body" id="add-eduucation">
                <form id="add-form">
                    @csrf

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> title
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="title" id="title" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> institution
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="institution" id="institution" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> description
                        </label>
                        <div class="form-group col-sm-10">
                            <textarea name="description	" id="description" class="form-control" type="text" required>
                            </textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Year
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="year" id="year" class="form-control" type="text" required>
                        </div>
                    </div>


                    <div class="d-flex">
                        <input class="btn btn-primary" onclick="addEducation(event)"  type="submit" name="submit"
                            value="submit" class="form-control">
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<script>
//     document.getElementById('add-form').addEventListener('submit', function (event) {
//     event.preventDefault();
//     addEducation();
// });

async function addEducation(event) {
    event.preventDefault();
    try {
        let title = document.getElementById('title').value;
        let institution = document.getElementById('institution').value;
        let description = document.getElementById('description').value;
        let year = document.getElementById('year').value;

        // Create FormData to send as multipart/form-data
        let formData = new FormData();
        formData.append('title', title);
        formData.append('institution', institution);
        formData.append('description', description);
        formData.append('year', year);

        // Close modal
        let closeButton = document.getElementById('add-modal-close');
        if (closeButton) {
            closeButton.click();
        }

        const config = {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'multipart/form-data',
            },
        };

        const res = await axios.post('/admin/education', formData, config);

        if (res.status === 200) {
            document.getElementById("add-form").reset();
            toastr.success(res.data.message, 'Success');
            await getList();
        } else {
            toastr.error("Something Went Wrong");
        }
    } catch (error) {
        console.error('Error adding education:', error);
        
        toastr.error("An error occurred while adding education");
        console.log('Response:', error.response);
    }
}


</script>