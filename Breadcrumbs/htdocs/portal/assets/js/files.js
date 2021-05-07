$(document).ready(function(){
    $("#upload").click(function(){
        var formData = new FormData();
        formData.append('file', $('#file')[0].files[0]);
        formData.append('task', $('#task').val() + ".zip");
        post(formData);
        formData = null;
    })
});


function post(formData){
    jQuery.ajax({
        url: "../includes/fileController.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: formData,
        success: function(res){
            $("#message").html(res);
        }
    });
}