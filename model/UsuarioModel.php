<?php
require_once 'config/Conexao.php';

class UsuarioModel{
    function __construct(){
            $this->conexao = Conexao::getConnection();
    }
    function excluir($id){
        $sql = "DELETE FROM usuario WHERE idusuario = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("i", $id);
        return $comando->execute();
    }
 
    function atualizar($id, $login, $senha){
        $sql = "UPDATE usuario SET login = ?, senha = ? WHERE idusuario = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("ssi", $login, $senha, $id);
        $comando->execute();
    }
 
    function buscarPorLogin($login){
        $sql = "SELECT * FROM usuario WHERE login = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("s", $login);
        if($comando->execute()){
            $resultados = $comando->get_result();
            return $resultados->fetch_assoc();
        }
        return null;
    }

    function buscarPorId($id){
        $sql = "SELECT * FROM usuario WHERE idusuario = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("i", $id);
        if($comando->execute()){
            $resultados = $comando->get_result();
            return $resultados->fetch_assoc();
        }
        return null;
    }

    function buscarTudo(){
        $sql = "SELECT * FROM usuario";
        $comando = $this->conexao->prepare($sql);
        if($comando->execute()){
            $resultados = $comando->get_result();
            return $resultados->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }
    function inserir($login, $senha){
        $sql = "INSERT INTO usuario (login, senha) VALUES (?, ?)";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("ss", $login, $senha);
        return $comando->execute();
    }
}

   
?>