$( document ).ready(function() { 

    // on image drag
    $("#dropZone").on("drag", function() {
        $(this).addClass('hovered');
    });  

    $("#dropZone").on("dragover", function(e) {
        e.preventDefault();  
        e.stopPropagation();
        $(this).addClass('hovered');    
    });  

    $("#dropZone").on("dragleave", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('hovered');
    });  

    const modalClose = (function() {
        $("#modalClose, #modalCloseBottom").on("click", function(e) {
            setTimeout(function() {
                $("#dropImage").attr("src", '');
                $("#fill").addClass('d-none');
                $("#dropText").css("display", "block");
                $("#validationMsg").addClass('d-none');
            }, 500)
        }); 
    })

    const validation = (function(text) {
        $("#dropImage").attr("src", '');
        $("#fill").addClass('d-none');
        $("#dropText").css("display", "block");
        $("#validationMsg").removeClass('d-none');
        $("#validationMsg").text(text);
    })

    $("#dropZone").on("drop", function(e) {
        e.preventDefault();
        $(this).removeClass('hovered')
        const file = e.originalEvent.dataTransfer.files[0];
        const fileType = file.type;
        const fileSize = ((file.size)/(1024*1024)).toFixed(2);
        console.log(fileType)

        if(fileType == "image/png" || fileType == "image/jpeg") {
            const reader = new FileReader();
            $("#dropText").css("display", "none");
            $("#dropImage").css("display", "block");
            $("#fill").removeClass('d-none');
            $("#validationMsg").addClass('d-none');

            reader.onload = function() {
                $("#dropImage").attr("src", $(this)[0].result);
                $("#uploadBtn").removeClass('disabled');
            };

            reader.readAsDataURL(file);

            $("#uploadBtn").on('click', function() {
                const title = $("#imageTitle").val();
                const titleTag = $("#imageTitle");
                const titleHelp = $("#titleHelp");

                if(title == "") {
                    titleHelp.removeClass('d-none');
                    titleTag.addClass('errorBorder');
                } else {
                    const formData = new FormData();
                    formData.append('photo', file);
                    formData.append('title', title);
                    onFileUpload(formData, titleTag, titleHelp);
                }
            });
        }

        else if(fileType == 'video/x-matroska' || fileType == 'video/mp4') {
            validation("Videos not allowed !")
            modalClose();
        }

        else if(fileSize > 4.00) {
            validation("Please select less then 4 MB size picture")
            modalClose();
        }

        else {
            validation("Only PNG or JPG file format is allowed !")
            modalClose();
        }
    }); 

    // on click image
    $(".dropZoneFileSelect").on('change', function() {
        const file = this.files[0];
        const fileSize = ((file.size)/(1024*1024)).toFixed(2);
        const fileType = file.type;

        if(fileType == "image/png" || fileType == "image/jpeg") {
            const reader = new FileReader();
            $("#dropText").css("display", "none");
            $("#dropImage").css("display", "block");
            $("#fill").removeClass('d-none');
            $("#validationMsg").addClass('d-none');

            reader.onload = function(e) {
                $("#dropImage").attr("src", e.target.result);
                $("#uploadBtn").removeClass('disabled');
            };

            reader.readAsDataURL(file);

            $("#uploadBtn").on('click', function() {
                const title = $("#imageTitle").val();

                if(title == "") {
                    $("#titleHelp").removeClass('d-none');
                    $("#imageTitle").addClass('errorBorder');
                } else {
                    const formData = new FormData();
                    formData.append('photo', file);
                    formData.append('title', title);
                    onFileUpload(formData);
                }
            });

            modalClose();
        } 
        else if(fileType == 'video/x-matroska' || fileType == 'video/mp4') {
            validation("Videos not allowed !")
            modalClose();
        }

        else if(fileSize > 5.00) {
            validation("Please select less then 5 MB size picture")
            modalClose();
        }

        else {
            validation("Only PNG or JPG file format is allowed !")
            modalClose();
        }
    })

    function onFileUpload(formData) {
        const url = '/uploadPhoto';
        const config = {
            headers: {'content-type' : 'multipart/form-data'},
            onUploadProgress: function(e) {
                console.log(e)
                const upPercent = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;
                console.log(upPercent)
                $('#progressBarFill').css('width', upPercent.toFixed(2) + "%");
                $('.bar-fill-text').text(upPercent.toFixed(2) + "%")
            }
        }
        axios.post(url, formData, config).then((response) => {
            if(response.status == 200 && response.data == 1) {
                afterUpload();
            } else {
                afterUpload();
                alert('Something Went Wrong !')
            }
        }).catch((error) => { 
            afterUpload();  
            alert('Something Went Wrong !')
        })
    }

    function afterUpload() {
        $("#imageTitle").val("");
        $("#dropImage").attr("src", '');
        $("#fill").addClass('d-none');
        $("#dropText").css("display", "block");
        $("#validationMsg").addClass('d-none');
        $('#progressBarFill').css('width', 0);
        $('.bar-fill-text').text("")
        $("#uploadBtn").addClass('disabled');
        $("#titleHelp").addClass('d-none');
        $("#imageTitle").removeClass('errorBorder');
    }

});