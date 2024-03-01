<?php
$login_cookie = $login_cookie['login'];
if(isset($login_cookie)){
    echo"Bem-Vindo, $login_cookie <br>";
    echo"Essas informaçoes <front color='red'>PODEM</front> ser acessadas por voce";
}else{
    echo "Bem Vindo, convidado <br>";
    echo "Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
    echo "<br><a href='login.html'>Faça login</a> Para lero conteudo";
}
?>