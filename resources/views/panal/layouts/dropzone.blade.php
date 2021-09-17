    <script>
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getElementsByClassName("content");

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone(".dropzone",{ 
        maxFilesize: 3,  // 3 mb
        acceptedFiles: ".jpeg,.jpg,",
    });
    myDropzone.on("sending", function(file, xhr, formData) {
       formData.append("_token", CSRF_TOKEN);
    }); 
    </script>