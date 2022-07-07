<?php
require "model/CategoriaModel.php";
require "model/ProdutoModel.php";

class Home
{
    function __construct()
    {
        $this->categoria = new CategoriaModel();
        $this->produto = new ProdutoModel();
    }

    function index($id = null)
    {
        $categorias = $this->categoria->buscarTudo();
        if (!$id) {
            $produtos = $this->produto->buscarTudo();
        } else {
            $produtos = $this->produto->buscarPorCategoria($id);
        }

        include "view/template/cabecalho.php";
        include "view/template/menu_home.php";
        include "view/home/listagem.php";
        include "view/template/rodape.php";
    }


    function ver($id)
    {
        $categorias = ($this->categoria->buscarTudo());
        $produto = $this->produto->buscarPorId($id);
        include "view/template/cabecalho.php";
        include "view/template/menu_home.php";
        include "view/home/ver.php";
        include "view/template/rodape.php";
    }

function search(){
    $categorias = $this->categoria->buscarTudo();
    $produtos = $this->produto->buscarPorLikeNome($_POST['search']);

    include "view/template/cabecalho.php";
    include "view/template/menu_home.php";
    include "view/home/listagem.php";
    include "view/template/rodape.php";

}

}

//$categoria = new CategoriaModel();
//$categoria->inserir("SmartTV");
//$categoria->excluir(1);
//$categoria->atualizar(2, "SmartPhone");
//var_dump($categoria->buscarPorId(3));
//var_dump($categoria->buscarTudo());
