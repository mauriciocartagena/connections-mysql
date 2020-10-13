<?php


    try{

        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root","root");
        
        $base->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        $base->exec('SET CHARACTER SET UTF8');

        $sql_total = "SELECT Nombre, Apellido, Direccion FROM datos_usuarios LIMIT 0,9";

        $result = $base->prepare($sql_total);

        $result->execute( array());

        while ($registro = $result->fetch(PDO::FETCH_ASSOC)) {
            # code...
            echo "Nombre :  ".$registro['Nombre']." Apellido : ".$registro['Apellido']." Dirección : ".$registro['Direccion']."<br/>"; 
        }

        $result->closeCursor();

    }catch(Exception $e ){

        echo "Linea de error :".$e->getLine();
    }
?>