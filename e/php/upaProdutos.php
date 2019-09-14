<?php

session_start();

require_once('../php/vendaDao.php');    
require_once('../php/venda.php');

if ($_SESSION['autenticado']){

    $p1 = new Venda($_POST['nomeItem'], $_POST["quantidade"], $_POST["peso"], $_POST["unidade"], $_POST["cidade"], $_POST["bairro"], $_POST["rua"], $_POST["preco"]);


    $p1->set_codVendedor(intval($_SESSION['cod_usuario']));

    //if ($_POST["complemento"]!==null){
        $p1->set_complemento($_POST["complemento"]);
    //}

    //if ($_POST["descricao"]!==null){
        $p1->set_descricao($_POST["descricao"]);
    //}

    //if ($_POST["embalagem"]!==null){
        $p1->set_embalagem($_POST["embalagem"]);
    //}

    $vdao = New vendaDAO();
    $vdao->inserir($p1);
    header("Location: ../vender.php");

}
else{
    print("não autenticado");
    //header("Location: login.php");
}




?>