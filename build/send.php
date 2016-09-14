<?


function clearDate($date){
	$date=trim(strip_tags($date));
	return $date;
}



if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['city'])) {$city = $_POST['city'];}
if (isset($_POST['info'])) {$callme = $_POST['info'];}
if (isset($_POST['info2'])) {$info2 = $_POST['info2'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}
if (isset($_POST['section'])) {$section = $_POST['section'];}


$type=clearDate($_POST["type"]);
$source=clearDate($_POST["source"]);
$key=clearDate($_POST["key"]);

$block=clearDate($_POST["block"]);
$keyword=clearDate($_POST["keyword"]);
$pos=clearDate($_POST["pos"]);
$campaign=clearDate($_POST["campaign"]);
$ad=clearDate($_POST["ad"]);




$subject='Письмо с сайта gs123.ru' .$callme;






$to = "info@gs123.ru";

$message = "".$callme."Вам оставлена заявка со следующей информацией:"."\n<br><br>Cекция: ".$section."\n<br>Имя: ".$name."\n<br>Телефон: ".$phone;
$headers = 'From: info@gs123.ru' . "\r\n" . 'Reply-To: ' . $formEmail .  "\r\n" .'X-Mailer: Adobe Muse 7.3.5 with PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n";

	$sent = @mail($to, $subject, $message, $headers);





if ($sent == 'true')
{
echo("<script>location.href='./#thanks'</script>");
}
else
{
echo "
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <div align='center' class='warning_font' align='left'>Ваше письмо не доставлено. Повторите отправку немного позже!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>

 </td>
 </tr>
 </table>";
}

?>
