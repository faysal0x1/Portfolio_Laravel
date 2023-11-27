<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Services</h5>
                <button type="button" id="add-modal-close" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-form" >
                    @csrf
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Title
                        </label>
                        <div class="form-group col-sm-10">
                            <input name="title" id="title" class="form-control" type="text" required>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> ServiceList
                        </label>
                        <div class="form-group col-sm-10">
                            <table class="table table-bordered table-hover" id="dynamic_field">
                                <tr>
                                    <td><input type="text" name="service_list[]" id="service_list"
                                            placeholder="Enter your Feature" class="form-control service_list" /></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-primary">Add
                                            More</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex">
                        <input class="btn btn-primary" onclick="addService(event)" type="submit" name="submit"
                            value="submit" class="form-control">
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
 
   $("#add").click(function(){
     
    //   <!-- var rowIndex = $('#dynamic_field').find('tr').length;	 -->
    //   <!-- console.log('rowIndex: ' + rowIndex); -->
    //   <!-- console.log('amount: ' + addamount); -->
    //   <!-- var currentAmont = rowIndex * 700; -->
    //   <!-- console.log('current amount: ' + currentAmont); -->
    //   <!-- addamount += currentAmont; -->
      
      addamount += 700;
      console.log('amount: ' + addamount);
    i++;
       $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="service_list[]" placeholder="Enter your Feature" class="form-control service_list" id="service_list"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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
    async function addService(event)
{
    event.preventDefault();
    try {
        // var fomdata = new FormData(document.getElementById('add-form'));
        var fomdata = new FormData(document.getElementById('add-form'));

        fomdata.append('title', document.getElementById('title').value);


        // document.getElementById('add-modal-close').click();
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

        const res = await axios.post('/admin/services', fomdata, config);

        if (res.status === 200) {
            document.getElementById("add-form").reset();
            toastr.success(res.data.message, 'Success');
            await getList();
        }else{
            toastr.error("Something Went Wrong");
        }
    } catch (error) {
          toastr.error("Catch Something Went Wrong");
    }
}

</script>