<?php
include_once("./conexao.php"); 

class arealazer{

    private $idArea;
    private $nomeArea;
    private $telefoneArea;
    private $enderecoArea;
    private $bairroArea;
    private $descricaoArea;
    private $fotoArea;
    

    public function getIdArea(){
        return $this->idArea;
    }
    public function getNomeArea(){
        return $this->nomeArea;
    }
    public function getTelefoneArea(){
        return $this->telefoneArea;
    }
    public function getEderecoArea(){
        return $this->enderecoArea;
    }
    public function getBairroArea(){
        return $this->bairroArea;
    }
    public function getDescricaoArea(){
        return $this->descricaoArea;
    }
    public function getFotoArea(){
        return $this->fotoArea;
    }
    
    public function setIdArea($idArea){
        $this->idArea = $idArea;
    }
    public function setNomeArea($nomeArea){
        $this->nomeArea = $nomeArea;
    }
    public function setFotoServico($telefoneArea){
        $this->telefoneArea = $telefoneArea;
    }
    public function setEnderecoArea($enderecoArea){
        $this->enderecoArea = $enderecoArea;
    }
    public function setBairroArea($bairroArea){
        $this->bairroArea = $bairroArea;
    }
    public function setDescricaoArea($descricaoArea){
        $this->descricaoArea = $descricaoArea;
    }
    public function setFotoArea($fotoArea){
        $this->fotoServico = $foto;
    }

   

    public function listar(){
        $connection = getConnection();

        $result_areas= "SELECT * FROM arealazer";//"SELECT arealazer (NomeArea, Telefone, Endereco, Bairro, Descricao, Foto )";
        // $resultado = mysqli_query(getConnection(), $result_areas);
        // // $lista = $resultado->fetchAll();
        // echo "Returned rows are: " . mysqli_num_rows($resultado);

        if ($result = mysqli_query($connection, $result_areas)) {
            return $result;
          }
 
        else echo 'deu erro';

        // return $resultado;   
    }

}