<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Criando  o email e enviando a mensagem
$to = 'beachsound.team@gmail.com'; // Adicione seu endereço de e-mail entre o '' substituindo seu nome@seudominio.com - Este é o local para onde o formulário enviará uma mensagem.
$email_subject = "Formulario de contato do Website:  $name";
$email_body = "Você recebeu uma nova mensagem do seu formulário de contato do website.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
$headers = "De: noreply@yourdomain.com\n"; // Este é o endereço de email da mensagem gerada. Recomendamos usar algo como noreply@yourdomain.com.
$headers .= "Responder a: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
