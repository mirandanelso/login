<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect =mysql_connect('localhost','nome_de_root','senha');
$db = mysql_connect_db('nome_do_banco_de_dados');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array =mysql_fetch_array($select);
$logarray = $array['login'];
if($login == "" || $login == null)
    echo"<script language='javascript' type='text/javascript'>
    alert('o campo login deve ser preenchido');window.location.href='
}else{
    if($logarray == $login){
        echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='cadastro.html';</script>";
         die();

        {else{
            $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
            $insert = mysql_query($query,$connect);

            if($insert){
                echo"<script language='javascript' type='text/javascript'> alert('Esse login já existe');window.location.hret='login.html'</script";
            }else{
                echo"<script language='javascript' type='text/javascript'>alert('nao foi possivel cadastrar esse usuario');window.location.hret='cadastro.html'</script";
            }
         }
    }
    ?>