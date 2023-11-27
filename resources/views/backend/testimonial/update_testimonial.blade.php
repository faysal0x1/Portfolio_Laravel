<div class="modal fade" id="update-modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Supplier Data</h5>
                <button type="button" class="btn-close" id="update-modal-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    @csrf

                    <input type="text" name="updateId" id="updateId">

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Name
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="updateName" id="updateName" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Position
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="updatePosition" id="updatePosition" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Description
                        </label>
                        <div class="form-group col-sm-10">
                            <textarea name="updateDescription" class="form-control" id="updateDescription"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Rate
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="updateRating" id="updateRating" class="form-control" type="number" required>
                        </div>
                    </div>


                    <div class="d-flex">
                        <input class="btn btn-primary" onclick="Update()" name="submit" value="submit"
                            class="form-control">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>


<script>
    async function FillUpUpdateForm(id) {
        try {
            let res = await axios.get(`/admin/testimonials/${id}/edit`);

            document.getElementById('updateId').value = res.data['id'];
            document.getElementById('updateName').value = res.data['name'];

            document.getElementById('updatePosition').value = res.data['position'];
            document.getElementById('updateDescription').value = res.data['description'];

            document.getElementById('updateRating').value = res.data['rating'];
        } catch (error) {
            console.error("Error filling up the update form:", error);
        }
}

    async function Update() {
        try {
            let updateID = document.getElementById('updateId').value;
            let name = document.getElementById('updateName').value;

            let position = document.getElementById('updatePosition').value;
            let description = document.getElementById('updateDescription').value;

            let rating = document.getElementById('updateRating').value;

                if(rating > 5 || rating <1)
                {
                    return toastr.error("Rating Cannot be more then 5 Or less then 1");
                }

            let closeButton = document.getElementById('update-modal-close');
            if (closeButton) {
            closeButton.click();
            }
            const updatedData = {
                name:name,
                position:position,
                description : description,
                rating: rating,
            };
            const res = await axios.put(`/admin/testimonials/${updateID}`, updatedData, {
                    headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
            });

            if (res.status === 200) {
                document.getElementById("update-form").reset();
                toastr.success(res.data.message, 'Success');
                await getList();
            } else {
                errorToast("Something Went Wrong");
            }
        } catch (error) {

                    console.error("Error updating the category:", error);
        }
}


</script>