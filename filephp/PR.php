<?php
include "conn.php";

if(isset($_POST)){

    $data = json_decode(file_get_contents('php://input'), true);

    $id = $data["id"];
    $targa = $data["targa"];
    $marca = $data["marca"];
    $modello = $data["modello"];
    $costo = $data["costo"];
    $info = $data["info"];
    $img = $data["img"];



    $query = "INSERT INTO autovettura (id, targa, marca, modello, costo, info, img) VALUES ('$id', '$marca', '$targa', '$modello', '$costo', '$info', '$img');";
    if($result = $conn->query($query)){
        $response = "inserimento avvenuto";
    }
    else{
        $response ="errorephp";
    }
    
}
else{
    $response ="errore grosso";
}


echo json_encode($response);
?>
