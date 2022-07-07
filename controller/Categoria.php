<?php
require "model/CategoriaModel.php";

class Categoria{
    function __construct()  {
        session_start();
        if(!isset($_SESSION['usuario'])){
            header('Location: ?c=restrito&m=login');
        }
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

        function editar($id){
            $categoria = $this->modelo->buscarPorId($id);
            include "view/template/cabecalho.php";
            include "view/template/menu.php";
            include "view/categoria/form.php";
            include "view/template/rodape.php";
        }
        
        function excluir($id){
          $this->modelo->excluir($id);
          header('Location: ?c=categoria');
        } 

        function salvar(){
            if(isset($_POST['categoria']) && !empty($_POST['categoria'])){
                    if(empty($_POST['idcategoria'])){
                        $this->modelo->inserir($_POST['categoria']);
                    }else{
                        $this->modelo->atualizar($_POST['idcategoria'], $_POST['categoria']);
                    }
                header('Location: ?c=categoria');
            } else{
                echo "Ocorreu um erro, pois os dados não foram enviados";
            }
        }
}




//$categoria = new CategoriaModel();
//$categoria->inserir("SmartTV");
//$categoria->excluir(1);
//$categoria->atualizar(2, "SmartPhone");
//var_dump($categoria->buscarPorId(3));
//var_dump($categoria->buscarTudo());
?>