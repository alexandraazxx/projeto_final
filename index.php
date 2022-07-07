<?php
$base_url = "http://projetofinalalexandra.epizy.com/index.php";
$controlador_padrao='home';
$controlador=ucfirst($_GET['c']??$controlador_padrao);
$metodo=$_GET['m']??'index';
$caminho_controlador="controller/$controlador.php";

if(file_exists($caminho_controlador)){
require $caminho_controlador;
$objController= new $controlador();
$id = $_GET['id'] ?? null;
if(is_callable(array($objController,$metodo))){
  call_user_func_array(array($objController,$metodo),array($id));
}
}
function base_url(){
  global $base_url;
   return $base_url;
}


/*
if(isset($_GET["c"])){
  $controller = ucfirst($_GET["c"]);
  $caminho_controller = "controller/$controller.php";


  if(file_exists($caminho_controller)){
     require $caminho_controller;

     $obj = new $controller();
     $funcao = $_GET['m'] ?? "index";

    if(is_callable(array($obj, $funcao))){
        $id = $_GET["id"] ?? "";
        call_user_func_array(array($obj, $funcao), array($id));
    }
  }
}
*/