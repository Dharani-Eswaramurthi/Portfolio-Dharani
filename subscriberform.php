
<?php


if($_POST["message"]) {
    $name=$_POST['name']
    $email=$_POST['email']
    $subject=$_POST['subject']
    $message=$_POST['message']


mail("dharani96556@gmail.com", $subject,


$_POST[$message]. $email);


}


?>