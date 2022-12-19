<?php
    if($_POST){
        $cedula= $_POST["cedula"];
        return BuscarCC($cedula);
    }
    $arrayClientes = new stdClass();
    $cliente = new stdClass();
    function BuscarCC($cc){
        
        $contenido=leer();
        $arregloPrincipal=separar($contenido);
        $arrgloEncontrados=encontrados($arregloPrincipal,$cc);
        $tabla=dividir($arrgloEncontrados);

        echo json_encode($tabla,JSON_FORCE_OBJECT);

    }
    
    
    function leer(){
        $file = "../archivos/12DICIEMBREWEB_V2.csv" or die("No se puede abrir el archivo");
        $openfile = fopen($file, "r");
        $cont = fread($openfile, filesize($file));
        
        return $cont;
    }
    
    function separar($contenido){
        $arrayLineas=explode("\n",$contenido);
        return $arrayLineas;
    }
    function encontrados($arregloPrincipal,$ccNit){
        $encontrados=[];
        foreach ($arregloPrincipal as $item) {
            if (strpos($item,$ccNit)>0) {
                array_push($encontrados,$item);
            }
        }
        return $encontrados;
    }
    function dividir($arrgloEncontrados){
        
        for ($i=0; $i < count($arrgloEncontrados); $i++) { 
            $arrgloEncontrados[$i]=explode(",",$arrgloEncontrados[$i]);
        }
        
        return $arrgloEncontrados;
        
    }

    // BuscarCC("822007117");


?>