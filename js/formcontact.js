$(document).ready(function() {
    $('#form-contact').submit(function(e) {
        // document.getElementById("name").value = ""
        // document.getElementById("email").value = ""
        // document.getElementById("phone").value = ""
        // document.getElementById("message").value = ""
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: './ajax/formcontact.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
 
                // user is logged in successfully in the back-end
                // let's redirect
                console.log(jsonData)
                
                if (jsonData.success == "1"){
                    swal("El mensaje se ha enviado!", "un asesor se comunicará muy pronto.", "success");
                    // console.log("Mensaje Enviado");
                    // alert("El mensaje se ha enviado correctamente, un asesor se comunicara muy pronto.")
                }else{
                    swal("El mensaje NO ha sido enviado!", "por favor intente nuevamente.", "error");
                    // console.log("Error al Enviar");
                    // alert("El mensaje NO ha sido enviado, por favor intente nuevamente.")
                }
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("phone").value = "";
                document.getElementById("message").value = "";
           }
       });
     });
});