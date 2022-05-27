$(document).ready(function () {
    // Data table
    $("#add-user").DataTable();
    $("#categoriesTable").DataTable();

    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    // CKEDITOR.replace('editor1');
    CKEDITOR.replace("editor1", {
        extraPlugins: "filebrowser",
        extraPlugins: "popup",
        extraPlugins: "filetools",
        filebrowserBrowseUrl: "../ckeditor/ckfinder/ckfinder.html",
        filebrowserUploadMethod: "form",
        filebrowserUploadUrl:
            "../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
    });

    // Show/Hide login Page password - START
    $(".showLoginPass").click(function () {
        let inputType = $("#login_password").attr("type");
        if (inputType == "text") {
            $("#login_password").attr("type", "password");
        } else {
            $("#login_password").attr("type", "text");
        }
    });
    // Show/Hide login Page password - END

    $(".categoryDropdownItem").on("click", function () {
        let status = $(this).text();
        $(".categoryDropdownTitle_d").text("");
        $(".categoryDropdownTitle_d").text(status);
    });
});
