<?php
require "model/CategoriaModel.php";

class Categoria{
    function __construct()  {
        $this->modelo = new CategoriaModel();
    }

    function index(){
        $categorias = $this->modelo->buscarTudo();
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/categoria/listagem.php";
        include "view/template/rodape.php";
        }
        
        function add(){
            include "view/template/cabecalho.php";
            include "view/template/menu.php";
            include "view/categoria/form.php";
            include "view/template/rodape.php";
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