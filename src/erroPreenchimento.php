<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$dataNascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$hobbies = $_POST["hobbies"]; 
   



if ($nome != null && $email != null && $dataNascimento != null && $sexo != null && $hobbies != null)
    header('location: cadastro.php?erro=1');
else
    header('location: cadastroView.php');

?>

