<?php

$recepient = "gustavaleksej9@gmail.com";
$siteName = "CV";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$submit = trim($_POST["submit"]);
$message = "Имя: $name \nemail: $email \nСообщение: $submit";

$pagetitle = "Заявка с сайта \"$siteName\"https://alexeygustav.github.io/My-CV";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>