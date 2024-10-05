<?php
session_start();
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);



if($nome && $email && $idade){

    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);

    echo 'nome: '.$nome."<br/>";
    echo'email:'.$email."<br/>"; 
    echo'idade:'.$idade; 
} else {
    $_SESSION["aviso"] = 'Preencha os itens corretamente!';
    
    header("Location: index.php");
    exit;
}
?>