$("#get_answer").click(function(){
    $.ajax({
        url : "calculator.php",
        type : "POST",
        data : $("#form_details").serialize(),
        success : function(data){           
            Swal.fire({
                title: data,
                confirmButtonColor: "#71b7e6",
              })
        },
    });
});