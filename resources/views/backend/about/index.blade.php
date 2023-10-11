@extends('admin.admin_dashboard')

@section('admin')
<!-- Include pdf.js and pdf.worker.js -->

<!-- Include pdf.js and pdf.worker.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js"></script>


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
        <div class="btn-group">
            <a href="" class="btn btn-primary">Add Brand</a>
        </div>
    </div>
</div>

<hr>


<div class="container">
    <div class="main-body">
        <div class="row">

            <div class="col-lg-10 ms-auto me-auto mt-2 h-a">
                <div class="card h-full">
                    <div class="card-body">
                        <form id="pdf-upload-form">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Title</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="title" id="title" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Short Title</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="short_title" id="short_title" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Bio</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="bio" type="text" id="bio" placeholder="Not more then 1 line"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Description</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input name="description" id="description" type="text"
                                        placeholder="Not more then 1 line" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">CV</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{-- <input name="pdf_file" class="form-control" type="file" id="pdf_file"> --}}
                                    <input type="file" class="form-control" id="pdf_file" name="pdf_file" />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">PDF Preview</h6>
                                </div>
                                <div class="col-sm-9">
                                    <iframe id="pdfPreview" style="width:50%; height:200px;"></iframe>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">

                                    <input class="btn btn-primary" onclick="aboutData(event)" type="submit"
                                        name="submit" value="submit" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>





<script type="text/javascript">
    aboutAllData();
    async function aboutAllData() {
    
    try {
        const res = await axios.get('/admin/about/data');
        document.getElementById("pdf-upload-form").reset();
        document.getElementById("title").value = res.data.title;
        document.getElementById("short_title").value = res.data.short_title;
        document.getElementById("bio").value = res.data.bio;
        document.getElementById("description").value = res.data.description;
        document.getElementById("pdf_file").value = res.data.pdf_file;

alert(res.data.pdf_file);
const pdfFileName = res.data.pdf_file;
const pdfUrl = `http://127.0.0.1:8000/${pdfFileName}`;// Replace with the URL of the PDF

$('#pdf_file').change(function(e) {
        var file = e.target.files[0];
        var pdfPreview = document.getElementById('pdfPreview');

        if (file) {
            var objectURL = URL.createObjectURL(pdfUrl);
            pdfPreview.setAttribute('src', objectURL);
        } else {
            pdfPreview.setAttribute('src', ''); 
        }
    });

    

    
    }catch(e) {
        console.log(e);
    }
}


    $(document).ready(function() {
    $('#pdf_file').change(function(e) {
        var file = e.target.files[0];
        var pdfPreview = document.getElementById('pdfPreview');

        if (file) {
            var objectURL = URL.createObjectURL(file);
            pdfPreview.setAttribute('src', objectURL);
        } else {
            pdfPreview.setAttribute('src', ''); 
        }
    });
});




 async function aboutData() {
 
    event.preventDefault();
    
    try {
        const formData = new FormData(document.getElementById('pdf-upload-form'));

        const title = document.getElementById('title').value;
        const short_title = document.getElementById('short_title').value;
        const bio = document.getElementById('bio').value;
        const description = document.getElementById('description').value;
        const pdf_file = document.getElementById('pdf_file').files[0];


        const data = {
            title: title,
            short_title: short_title,
            bio: bio,
            description: description,
            pdf_file: pdf_file,
        };
        
console.log(data['pdf_file']);
        const config = {
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'multipart/form-data',
            },
        };


        const res = await axios.post('/admin/about/store', data, config);

        if (res.status === 200) {
            document.getElementById("pdf-upload-form").reset();
            toastr.success(res.data.message, 'Success');
            await aboutAllData();
        } else {
            toastr.error(res.data.message);
        }
    } catch (error) {
        alert("Error: " + error.message);
    }
}



</script>


@endsection