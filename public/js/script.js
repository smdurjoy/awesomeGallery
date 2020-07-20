$( document ).ready(function() { 

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

    $("#dropZone").on("drop", function(e) {
        e.preventDefault();
        $(this).removeClass('hovered')
        // console.log(e.originalEvent.dataTransfer.files.length)   
        const file = e.originalEvent.dataTransfer.files[0];

        if(file) {
            const reader = new FileReader();
            $("#dropText").css("display", "none");
            $("#dropImage").css("display", "block");
            $("#fill").removeClass('d-none');

            reader.onload = function() {
                $("#dropImage").attr("src", $(this)[0].result);
                $("#uploadBtn").removeClass('disabled');
            };

            reader.readAsDataURL(file);

            $("#modalClose").on("click", function(e) {
                setTimeout(function() {
                    $("#dropImage").attr("src", '');
                    $("#fill").addClass('d-none');
                    $("#dropText").css("display", "block");
                }, 500)
            }); 
        }
    }); 
});