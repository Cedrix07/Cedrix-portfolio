<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);


        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cedrixdacanay27@gmail.com'; //my gmail 
        $mail->Password = 'yzcv ogzl pxxn plks'; //password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($_POST["email"], $_POST["name"]); 
        $mail->addAddress('cedrixdacanay27@gmail.com'); //my gmail 

        $mail->isHTML(true);
        $mail->Body = $_POST["message"]; //email message

        $mail->send();

        echo 
        "
            <script>
                alert('Sent Successfully!');
                document.location.href = 'index.html';
            </script>
        ";
}   

?>
