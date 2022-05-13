$(document).ready(function() {
    // Data table 
    $('#example').DataTable();

        // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    // CKEDITOR.replace('editor1');
   CKEDITOR.replace('editor1', {
        extraPlugins : 'filebrowser',
        extraPlugins : 'popup',
        extraPlugins : 'filetools',
        filebrowserBrowseUrl: '../ckeditor/ckfinder/ckfinder.html',
        filebrowserUploadMethod: 'form',
        filebrowserUploadUrl: '../ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    });

    



} );