<?include ("db_settings.php");

if(empty($_POST['pagetl'])){header("Location: http://ilmenyplus.ru/"); exit;}

$name = $_POST['fio'];
$text = nl2br($_POST['text']);
$number = $_POST['number'];
$email = $_POST['email'];
$pagetl = $_POST['pagetl'];
$dat = date("d.m.y");
$result = mysql_query("INSERT INTO feedback VALUES ('', '$name', '', '$text', '$number', '$email', '$dat')");

/* Убираем все лишние пробелы и переносы строк  и преобразуем все теги html в символы*/
$name = htmlspecialchars(trim($name));
$text = htmlspecialchars(trim($text));
$number = htmlspecialchars(trim($number));
$email = htmlspecialchars(trim($email));
$pagetl = htmlspecialchars(trim($pagetl));

echo 'asd';
/* Формируем сообщение */
// $yourmail = "ilmenyplus@mail.ru"; // вставьте сюда ваш email на который будут приходить письма пользователей
$yourmail = "ilmenyplus@mail.ru"; // вставьте сюда ваш email на который будут приходить письма пользователей
$sub = "Сообщение с сайта ilmenyplus.ru"; //вставьте название вашего сайта
$messsage = "Страница отправки сообщения: $pagetl<br/><br/> Пользователь: $name <br/>Номер телефона: $number <br/>E-mail: $email <br/><br/>Текст сообщения: $title <br/>$text";
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=utf-8\r\n"; //кодировка
$headers.="From: info@ilmenyplus.ru\r\n";

/* Отправка */
$sendmail = mail ($yourmail,$sub,$messsage,$headers);
header("Location: http://ilmenyplus.ru/"); exit;