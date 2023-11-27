<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Skills</h5>
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
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Position
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="position" id="position" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Description
                        </label>
                        <div class="form-group col-sm-10">
                            <textarea name="description" class="form-control" id="description"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Rate
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="rate" id="rate" class="form-control" type="number" required>
                        </div>
                    </div>


                    <div class="d-flex">
                        <input class="btn btn-primary" onclick="addSkill(event)" type="submit" name="submit"
                            value="submit" class="form-control">
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<script>
    async function addSkill(event)
{
    event.preventDefault();
    try {
        let name = document.getElementById('name').value;
        let position = document.getElementById('position').value;

        let description = document.getElementById('description').value;

        let rating = document.getElementById('rate').value;

 
        if(rating > 5 || rating < 1)
        {
            toastr.error("Rating Cannot be more then 5 Or less then 1");
        }else{
        let closeButton = document.getElementById('add-modal-close');
        if (closeButton) {
            closeButton.click();
        }
        const data = {
            name:name,
            position:position,
            description : description,
            rating: rating,
        };
         const config = {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'multipart/form-data',
            },
        };

        const res = await axios.post('/admin/testimonials', data, config);
        if (res.status === 200) {
            document.getElementById("add-form").reset();
            toastr.success(res.data.message, 'Success');
            await getList();
        }else{
            toastr.error("Something Went Wrong");
        }
        }

        
    } catch (error) {
        
    }
}

</script>