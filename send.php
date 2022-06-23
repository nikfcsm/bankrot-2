<?php
$ip = ($ip) ? $ip : $_SERVER['REMOTE_ADDR'] ;
$name = $_POST['name'];
$fone = $_POST['phone'];
$email = $_POST['email'];




$to = "bikmamatov.t@yandex.ru";
  $subject = "Форма с сайта timurbikmamatov.ru";
  
    $message = "
       <p> <b>Сообщение от:</b> $name</p>
              
              <p> <b>Телефон:</b> $fone</p>
             
   <p> <b>Email</b> $email</p> ";

  $headers = "From: timurbikmamatov.ru <zayavka@timurbikmamatov.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";
  mail ($to, $subject, $message, $headers);
  // header( 'Refresh: 0; url=index.html#win1' );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>С вами свяжутся</title>
<meta name="generator">
<style type="text/css">
body

{
  
   background: #22BFF7;
   
}
</style>
<!-- <script type="text/javascript"> setTimeout('location.replace("/index.html")', 300000);</script>  -->
</head>
<body>
  <h1 style="padding-top: 200px; color: white; font-size: 60px; display: flex; justify-content: center; justify-content: space-evenly; ">ВАША ЗАЯВКА ПРИНЯТА!</h1>
</body>

</html>


