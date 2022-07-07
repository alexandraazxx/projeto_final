<?php
require 'model/UsuarioModel.php';
class Restrito
{
    function __construct()
    {
        $this->usuario = new UsuarioModel();
    }


    function login($id)
    {
    
        include "view/template/cabecalho.php";
        include "view/restrito/form.php";
        include "view/template/rodape.php";
    }

    function logout(){
session_start();
unset( $_SESSION['usuario']);
session_destroy();
header('Location: ?c=restrito&m=login');

    }

    function entrar(){
if(isset($_POST['login']) && isset($_POST['senha'])){
$usuario = $this->usuario->buscarPorLogin($_POST['login']);
if(password_verify($_POST['senha'], $usuario['senha'])){
    session_start();
    $_SESSION['usuario'] = $usuario['login'];
    header('Location: ?c=categoria');
}else{
header('Location: ?c=restrito&m=login');

}
}


    }

}

//$categoria = new CategoriaModel();
//$categoria->inserir("SmartTV");
//$categoria->excluir(1);
//$categoria->atualizar(2, "SmartPhone");
//var_dump($categoria->buscarPorId(3));
//var_dump($categoria->buscarTudo());
