<?php

include_once("conexao.php"); 

$nomebairro = filter_input(INPUT_POST, 'Nomes');

$regiao = filter_input(INPUT_POST, 'Regioes');

$result_bairro= "INSERT INTO bairro (NomeBairro, Regiao ) VALUES ('$nomebairro','$regiao')";

$resultado_bairro = mysqli_query($conectar, $result_bairro);

$conectar = getConnection();

if(mysqli_insert_Id($conectar)){
    $_SESSION['msg'] = "<p>area cadastrada com sucesso!</p>";
    header("Location: Bairros.php");

}else{
    $_SESSION['msg'] = "<p> Erro ao cadastrar area tente novamente </p>";
    header("Location: Bairros.php");
}


?>

?>