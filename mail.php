<?php

$recepient = "gustavaleksej9@gmail.com";
$siteName = "CV";

$name = trim($_POST["name"]);
$phone = trim($_POST["email"]);
$message = "Имя: $name \nТелефон: $email \nСообщение: $submit";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>