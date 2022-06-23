<?php
require "../model/CategoriaModel.php";

$categoria = new CategoriaModel();
$categoria->inserir("SmartTV");
$categoria->excluir(1);
$categoria->atualizar(2, "SmartPhone");
var_dump($categoria->buscarPorId(3));
var_dump($categoria->buscarTudo());
?>