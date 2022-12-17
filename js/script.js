function accionBuscar() {
    // console.log(document.getElementById('inputCedula').value)
    $.ajax({
        type: 'POST',
        url: 'ajax/buscar.php',
        data: {cedula:document.getElementById('inputCedula').value},
        success: function(respuesta) {
            console.log(typeof respuesta)
            if(respuesta!="{}"){
                    console.log(respuesta);

                    let expre= new RegExp('\"[0-9]{1,2}\":\"');
                    let contenido = respuesta.split(expre);
                    const element=[];
                    for (let i = 0; i < contenido.length; i++) {
                        element[i] = contenido[i].substr(0,contenido[i].length - 2);
                    }

                    element.splice(0,1);
                    element[element.length-1] = element[element.length-1].substr(0,element[element.length-1].length - 1);
                    const exp=new RegExp('"},"[0-9]"');
                    for (let i  = 0; i < element.length; i++) {
                        if (i%3==0 && i!=0) {
                            let x=i-1;
                            element[x]=element[x].replace(exp,"")
                        }
                    }

                    vecFinal=[];
                    for (let i = 0; i < (element.length/3); i++) {
                        vecFinal[i]="";

                    }
                    console.log(vecFinal.length)
                    for (let i = 0; i < vecFinal.length; i++) {

                        vecFinal[i]=element.slice(0,3);
                        element.splice(0,3);

                    }
                    var str=''
                    for (let i = 0; i < vecFinal.length; i++) {
                        
                        str=str+'<tr>\n'+
                            '<td scope="col">'+vecFinal[i][1]+'</td>\n'+
                            '<td scope="col">'+vecFinal[i][0]+'</td>\n'+
                            '<td scope="col">'+vecFinal[i][2]+'</td>\n'+
                        '</tr>\n'
                    }

                    let tabla= document.getElementById('tabla_respuesta');


                    tabla.innerHTML='<table class="table">\n'+
                        '<thead>\n'+
                            '<tr>\n'+
                            '<th scope="col">Cedula / NIT</th>\n'+
                            '<th scope="col">Nombre</th>\n'+
                            '<th scope="col">Deuda</th>\n'+
                            '</tr>\n'+
                        '</thead>\n'+
                        '<tbody>\n'+str+
                        '</tbody>\n'+
                        '</table>';
                        
                    $('#exampleModal').modal('show');
                    document.getElementById("inputCedula").value = "";
            }
            else {
                let tabla= document.getElementById('tabla_respuesta');

                    console.log("No encontro nada")

                    tabla.innerHTML='No se encontraron coincidencias<br><br>'+
                    '<b>Si necesitas mas información comunicate con el área de facturación. Whatsapp 3114916907.<b>';

                    document.getElementById("inputCedula").value = "";
            }
        }
    });

    
}