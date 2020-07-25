<?php  

$project_name = trim($_POST["project_name"]);
$admin_email  = trim($_POST["admin_email"]);
$form_subject = trim($_POST["form_subject"]);
$name = $_POST['fio'];
$text = nl2br($_POST['text']);
$number = $_POST['number'];
$email = $_POST['email'];
$pagetl = $_POST['pagetl'];

// Убираем все лишние пробелы и переносы строк  и преобразуем все теги html в символы
$name = htmlspecialchars(trim($name));
$text = htmlspecialchars(trim($text));
$number = htmlspecialchars(trim($number));
$email = htmlspecialchars(trim($email));
$pagetl = htmlspecialchars(trim($pagetl));

// Формируем сообщение
$message = "Страница отправки сообщения: $pagetl<br/><br/> Пользователь: $name <br/>Номер телефона: $number <br/>E-mail: $email <br/><br/>Текст сообщения: $title <br/>$text";

function adopt($text) {
  return '=?UTF-8?B?'.Base64_encode($text).'?=';
}
 
$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;
 
mail($admin_email, adopt($form_subject), $message, $headers );