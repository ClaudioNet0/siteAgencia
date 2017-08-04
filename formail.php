<?php

ini_set ("SMTP","smtp.eb.mil.br");

////////////////////////////////////////////////

// Formail em PHP por SK15 v 1.0 |||

// Esse formulario é uma imitação do formail |||

// com um pequena ponto fraco |||

// ao adicionar um novo campo ele tera |||

// quer ser mudado aqui nesse arquivo |||

/////////////////////////////////////////////|||

// Carrega dados pelo método POST, independente da configuração das variáveis Globais do ini do PHP

$nome=$_POST["nome"];

$email=$_POST["email"];

$assunto = "Contato pelo site!";

$mensagem=$_POST["mensagem"];

// Verifica se O Campo nome tá preenchido

if (empty($nome) || empty($email) || empty($mensagem)){

// HTML que aparecera o ERRO
echo "Preencher os campos corretamente!";
}
elseif (isset($email) && !(strpos($email,"@")) OR strpos($email,"@") !=strrpos($email,"@")) {

echo"O campo de E-mail esta inválido!";
exit();
}
else{

// Comfirma o Envio Do E-mail


// Função de envio Do E-mail

//mail ("seuendereço@seuservidor.com.br ","nome","string message", "string additional_headers");

mail ("bestbsbtour@gmail.com","$assunto","Nome:$nome\n Email:$email\n Mensagem:$mensagem \n\n ...::: BestBSTour ® :::...","From:$nome<$email>");

echo"ok";
exit();
}
?>