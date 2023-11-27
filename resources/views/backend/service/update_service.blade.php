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
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Title
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="servicesTitleUpdate" id="servicesTitleUpdate" class="form-control" type="text"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> ServiceList
                        </label>
                        <div class="form-group col-sm-10">
                            <table class="table table-bordered table-hover" id="dynamic_fieldUpdate">
                                <tr>
                                    <td><input type="text" name="updateservice_list[]" id="updateservice_list"
                                            placeholder="Enter your Feature" class="form-control updateservice_list" /></td>
                                    <td><button type="button" name="add" id="updateAdd" class="btn btn-primary">Add
                                            More</button></td>
                                </tr>
                            </table>
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
    $(document).ready(function(){
   
   var i = 1;
     var length;
     //var addamount = 0;
    var addamount = 700;

   $("#updateAdd").click(function(){
      addamount += 700;
      console.log('amount: ' + addamount);
        i++;

       $('#dynamic_fieldUpdate').append('<tr id="row'+i+'"><td><input type="text" name="updateservice_list[]" placeholder="Enter your Feature" class="form-control updateservice_list" id="updateservice_list"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     });
 
   $(document).on('click', '.btn_remove', function(){  
     addamount -= 700;
     console.log('amount: ' + addamount); 
       var button_id = $(this).attr("id");     
       $('#row'+button_id+'').remove();  
     });
     
 
   });
</script>


<script>
    async function FillUpUpdateForm(id) {
        try {
            let res = await axios.get(`/admin/services/${id}/edit`);

            console.log(res.data['service_list']);
            document.getElementById('updateId').value = res.data['id'];
            document.getElementById('servicesTitleUpdate').value = res.data['title'];
          


// Clear the dynamic input fields
$('#dynamic_field').empty();

// Add the dynamic input fields from res.data
if (Array.isArray(res.data['service_list'])) {
    res.data['service_list'].forEach(function (service, index) {
        // Add a new row with the service in the dynamic input field
        $('#dynamic_field').append(
            '<tr id="row' + index + '"><td><input type="text" name="service_list[]" placeholder="Enter your Feature" class="form-control service_list" id="service_list" value="' + service + '"/></td><td><button type="button" name="remove" id="' + index + '" class="btn btn-danger btn_remove">X</button></td></tr>'
        );
    });
}


        } catch (error) {
            console.error("Error filling up the update form:", error);
        }
}

    async function Update() {
        try {
            let updateID = document.getElementById('updateId').value;
            let title = document.getElementById('servicesTitleUpdate').value;
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
                const res = await axios.put(`/admin/services/${updateID}`, updatedData, {
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