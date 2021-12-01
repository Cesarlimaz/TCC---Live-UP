<?php
include_once("conexao.php"); 

$nome = filter_input(INPUT_POST, 'Nome');

$telefone = filter_input(INPUT_POST, 'Telefone');

$endereco = filter_input(INPUT_POST, 'Endereco');

$bairro = filter_input(INPUT_POST, 'Bairro');

$descricao = filter_input(INPUT_POST, 'Descricao');

$foto = $_FILES["Foto"]["name"];

$result_areas= "INSERT INTO arealazer (NomeArea, Telefone, Endereco, Bairro, Descricao, Foto ) VALUES ('$nome','$telefone','$endereco','$bairro','$descricao','$foto')";

$conectar = getConnection();

$resultado_areas = mysqli_query($conectar, $result_areas);

$folder = "./uploads/";
$pic = $_FILES["Foto"]["name"];
$path = $folder.$pic; // New variable
$file = $_FILES["Foto"];
move_uploaded_file($_FILES["Foto"]["tmp_name"], $path);

if(mysqli_insert_Id($conectar)){
    $_SESSION['msg'] = "<p>area cadastrada com sucesso!</p>";
    header("Location: areas.php");

}else{
    $_SESSION['msg'] = "<p> Erro ao cadastrar area tente novamente </p>";
    header("Location: areas.php");
}


?>