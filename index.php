<?php
session_start();
require('header.php'); 

if($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<a href="apagar.php">Apagar cookie</a>

<form method="GET" action="recebedor.php">
    <label>
        Nome:
        <br/>
        <input type="text" name="nome"/>
    </label>
    <br/>
    <br/>

    <label>
        email:
        <br/>
        <input type="text" name="email"/>
    </label>
    <br/>
    <br/>

    <label>
        idade:
        <br/>
        <input type="text" name="idade"/>
    </label>
    <br/>
    <br/>

        <input type="submit" name="Enviar"/>
</form>