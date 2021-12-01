<?php

function getConnection() {
    $conectar = mysqli_connect ("localhost","root","","bd_liveup");

if(mysqli_connect_error()){
    echo "falha ao conectar: ". mysqli_connect_error();
    die();
}

return $conectar;
}
    

?>

