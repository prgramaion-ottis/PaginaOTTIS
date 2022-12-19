$(document).ready(function() {
    $('#pqrForm').submit(function(e) {
        // document.getElementById("name").value = ""
        // document.getElementById("email").value = ""
        // document.getElementById("phone").value = ""
        // document.getElementById("message").value = ""
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: './ajax/formpqr.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
 
                // user is logged in successfully in the back-end
                // let's redirect
                console.log(jsonData)
                
                if (jsonData.success == "1"){
                    swal("El mensaje se ha enviado!", "un asesor se comunicará muy pronto.", "success");
                    
                }else{
                    swal("El mensaje NO ha sido enviado!", "por favor intente nuevamente.", "error");

                    // console.log("Error al Enviar");
                    // alert("El mensaje NO ha sido enviado, por favor intente nuevamente.")
                }
                
                document.getElementById("apellido").value = "";
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("identificacion").value = "";
                document.getElementById("celular").value = "";
                document.getElementById("direccion").value = "";
                document.getElementById("text-tramite").value = "";
                window.location.href = "#pqrForm";
           }
       });
     });
});