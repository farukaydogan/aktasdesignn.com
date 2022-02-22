<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

$errors = [];
$success = "Başarılı.";
$text = "Kısa bir süre sonra sizinle iletişime geçeceğiz";
$color = "#4BB543";
$imoji = "✓";

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }
    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
}

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPKeepAlive = true;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //ssl

$mail->Port = 587; //25 , 465 , 587
$mail->Host = "smtp.gmail.com";

$mail->Username = "randomrndnext@gmail.com";
$mail->Password = "1411006Ek";

$mail->setFrom("aaktasdesign@gmail.com");
$mail->addAddress("aaktasdesign@gmail.com");

$mail->isHTML(true);
$mail->Subject = "Isim Soyisim: " . $name;
$mail->Body = "Mail Adresi : " . $email . "\n Merhaba Aktasdesignn.com'dan bir mesaj : " . "\n \n" . $message;
if ($mail->send()) {
    header("refresh:5;url=index.html");
} else {
    $success = "404 Not Found";
    $color = "#ff0000";
    $text = "Merhaba lütfen biz iletişime geçiniz.";
    $imoji = "X";
}
?>
<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Yine bekleriz.</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                    <i class="checkmark"><?php echo $imoji   ?></i>
                </div>
                <h1><?php echo $success   ?></h1>
                <p><?php echo $text ?><br />Teşekkürler.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    color h1 {
        color: <?php echo $color ?>;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    i {
        color: <?php echo $color ?>;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        height: 100%;
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }
</style>


</html>