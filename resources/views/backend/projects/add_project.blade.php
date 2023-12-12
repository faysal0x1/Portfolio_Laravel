<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Projects</h5>
                <button type="button" id="add-modal-close" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-form">
                    @csrf

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Name
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="name" id="name" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Description
                        </label>
                        <div class="form-group col-sm-10">
                            <textarea id="mytextarea" name="desc">Hello, World!</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Tags
                        </label>
                        <div class="form-group col-sm-10">
                            <select id="tags" name="tags" multiple data-role="tagsinput">
                                <option value="Tech">Tech</option>
                            </select>
                        </div>
                    </div>



                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Projects Image</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input name="image" class="form-control" type="file" id="image">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Image Preview</h6>
                        </div>
                        <div class="col-sm-9">

                            <img id="showImage" class="rounded-circle p-1 bg-primary"
                                style="width:100px; height: 100px;"
                                src="{{ !empty($aboutPage->about_image) ? url($aboutPage->about_image) : url('upload/no_image.jpg') }}"
                                alt="Card image cap">
                        </div>
                    </div>

                    <div class="d-flex">
                        <input class="btn btn-primary"  type="submit" name="submit"
                            value="submit" class="form-control">
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<script>
    document.getElementById('add-form').addEventListener('submit', function (event) {
    event.preventDefault();
    addSkill();
});

async function addSkill() {
    try {
        let name = document.getElementById('name').value;
        let image = document.getElementById('image').files[0];
        let desc = document.getElementById('mytextarea').value;
        let tags = document.getElementById('tags').value.split(',');

        // Create FormData to send as multipart/form-data
        let formData = new FormData();
        formData.append('name', name);
        formData.append('image', image);
        formData.append('desc', desc);
        formData.append('tags', JSON.stringify(tags));

        // Close the modal (if needed)
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

        const res = await axios.post('/admin/projects', formData, config);
        if (res.status === 200) {
            document.getElementById("add-form").reset();
            toastr.success(res.data.message, 'Success');
            await getList();
        } else {
            toastr.error("Something Went Wrong");
        }
    } catch (error) {
        toastr.error("Something Went Wrong");
    }
}




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