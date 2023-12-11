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
                    @method('POST') 
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
                            <button type="button" name="add" id="updateAdd" class="btn btn-primary">Add
                                More</button>
                        </label>
                        <div class="form-group col-sm-10">
                            <table class="table table-bordered table-hover" id="dynamic_fieldUpdate">
                                <tr>
                                    <td><input type="text" name="updateservice_list[]" id="updateservice_list"
                                            placeholder="Enter your Feature" class="form-control updateservice_list" />
                                        
                                    </td>
                                    <td></td>
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

    $('#updateAdd').click(function () {
        addamount += 700;
        console.log('amount: ' + addamount);
        i++;

        $('#dynamic_fieldUpdate').append('<tr id="row' + i + '"><td><input type="text" name="updateservice_list[]" placeholder="Enter your Feature" class="form-control updateservice_list" id="updateservice_list"/></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
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
        $('#dynamic_fieldUpdate').empty();

        // Parse the service_list string into an array
        let serviceListArray = JSON.parse(res.data['service_list']);

        // Add the dynamic input fields from the array
        serviceListArray.forEach(function (service, index) {
            $('#dynamic_fieldUpdate').append(
                '<tr id="row' + index + '"><td><input type="text" name="updateservice_list[]" placeholder="Enter your Feature" class="form-control updateservice_list" id="updateservice_list" value="' + service + '"/></td><td><button type="button" name="remove" id="' + index + '" class="btn btn-danger btn_remove">X</button></td></tr>'
            );
        });

    } catch (error) {
        console.error("Error filling up the update form:", error);
    }
}
async function Update() {
    try {
        // Get the form data using FormData
        var formData = new FormData(document.getElementById('update-form'));

        // Assuming you have a valid CSRF token in your HTML

        const config = {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'multipart/form-data',
            },
        };

        // Use the axios library to send a POST request to the update route
        const res = await axios.post('/admin/services/update', formData, config);

        if (res.status === 200) {
            // Assuming you want to reset the form and refresh the data list on success

              document.getElementById("update-form").reset();

               // Close the modal
            let closeButton = document.getElementById('update-modal-close');
            if (closeButton) {
                closeButton.click();
            }
            
            toastr.success(res.data.message, 'Success');
           
            await getList();
        } else {
            toastr.error("Something Went Wrong");
        }
    } catch (error) {
        toastr.error("Catch Something Went Wrong", error);
    }
}



</script>