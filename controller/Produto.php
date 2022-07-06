<?php

require 'model/ProdutoModel.php';
require 'model/CategoriaModel.php';

class Produto{

    function __construct()  {
        $this->modelo = new ProdutoModel();
        $this->categoria_model = new CategoriaModel();
    }

    function index(){
        $produtos = $this->modelo->buscarTudo();
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/produto/listagem.php";
        include "view/template/rodape.php";
        }
        
        function add(){
            $categorias = $this->categoria_model->buscarTudo();
            include "view/template/cabecalho.php";
            include "view/template/menu.php";
            include "view/produto/form.php";
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
            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                    if(empty($_POST['idproduto']))
                        $this->modelo->inserir($_POST['nome'], $_POST['descricao'], $_POST['preco'], $_POST['marca'], "fujduhfd.png", $_POST['categoria']);
                    }else{
                        $this->modelo->atualizar(

                            $_POST['idproduto'], $_POST['nome'], $_POST['descricao'], $_POST['preco'], $_POST['marca'], "fujduhfd.png", $_POST['categoria']
                        );
                            
                            
                            $_POST['idcategoria'], $_POST['categoria']);
                    }
                header('Location: ?c=produto');
            } else{
                echo "Ocorreu um erro, pois os dados não foram enviados";
            }
        }
}

