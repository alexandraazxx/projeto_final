<?php
require "model/CategoriaModel.php";

class Categoria{
    function __construct()  {
        $this->modelo = new CategoriaModel();
    }

    function index(){
        include "view/template/conteudo.php";
        }
        
        function add(){
        echo "mostrar form categoria";
        }
        
        function excluir($id){
            echo "excluir categoria";
        } 
}




//$categoria = new CategoriaModel();
//$categoria->inserir("SmartTV");
//$categoria->excluir(1);
//$categoria->atualizar(2, "SmartPhone");
//var_dump($categoria->buscarPorId(3));
//var_dump($categoria->buscarTudo());
?>