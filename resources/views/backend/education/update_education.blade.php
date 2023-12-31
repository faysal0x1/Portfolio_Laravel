<div class="modal fade" id="update-modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Education</h5>
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
                            <input name="skilllsNameUpdate" id="skilllsNameUpdate" class="form-control" type="text"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Rate
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="updateRate" id="updateRate" class="form-control" type="number" required>
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
            let res = await axios.get(`/admin/education/${id}/edit`);

            document.getElementById('updateId').value = res.data['id'];
            document.getElementById('skilllsNameUpdate').value = res.data['title'];
            document.getElementById('updateRate').value = res.data['rate'];
        } catch (error) {
            console.error("Error filling up the update form:", error);
        }
}

    async function Update() {
        try {
            let updateID = document.getElementById('updateId').value;
            let title = document.getElementById('skilllsNameUpdate').value;
            let rate = document.getElementById('updateRate').value;
       

            // document.getElementById('update-modal-close').click();


            let closeButton = document.getElementById('update-modal-close');
            if (closeButton) {
            closeButton.click();
            }
                const updatedData = {
                    title: title,
                    rate: rate,
                };
                const res = await axios.put(`/admin/skills/${updateID}`, updatedData, {
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