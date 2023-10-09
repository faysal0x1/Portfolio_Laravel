$(document).ready(function () {
    $("#image").change(function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#showImage").attr("src", e.target.result);
        };
        reader.readAsDataURL(e.target.files["0"]);
    });
});

$(document).ready(function () {
    var table = $("#example2").DataTable({
        // lengthChange: false,
        buttons: ["copy", "excel", "pdf", "print"],
    });

    table.buttons().container().appendTo("#example2_wrapper .col-md-6:eq(0)");
});
