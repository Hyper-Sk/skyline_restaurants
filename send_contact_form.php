<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["contact_send"])) {
    //Load Composer's autoloader
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'SkyLineRestaurantsLTD';                     //SMTP username
        $mail->Password = 'qtmgdnxqdwlnrdad ';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('skylinerestaurantsltd@gmail.com');
        $mail->addAddress('skylinerestaurantsltd@gmail.com');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact - SkyLine Restaurants';
        $mail->Body = "  <table
        style='border-spacing: 0px; width: 586px; margin-inline: auto; font-family:Verdana, Geneva, Tahoma, sans-serif;'>
        <tr style='background-color: #1a1a1a; padding: 5px;'>
            <td colspan='2' style='padding: 5px;'>
                <img src='https://skylinerestaurants.com/images/logo.png' alt='logo' width='200'>
            </td>
        </tr>
        <tr >
            <td colspan='2' style='padding: 8px 10px;  border: 1px solid rgba(0,0,0,0.2); font-weight: 500; text-transform: uppercase; letter-spacing: 1px; text-align: center;'>
                Contact Message
            </td>
        </tr>
        <tr>
            <th
                style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2); text-align: left; padding: 8px 10px;width: 180px;'>
                Name </th>
            <td style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2);padding: 8px 10px;'>$name</td>
        </tr>
        <tr>
            <th
                style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2); text-align: left; padding: 8px 10px;width: 180px;'>
                Email </th>
            <td style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2);padding: 8px 10px;'>$email</td>
        </tr>
        <tr>
            <th
                style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2); text-align: left; padding: 8px 10px;width: 180px;'>
               Phone </th>
            <td style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2);padding: 8px 10px;'>+91 $phone</td>
        </tr>
        <tr>
            <th
                style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2); text-align: left; padding: 8px 10px;width: 180px;'>
                Message </th>
            <td style='font-size: 14px; border: 1px solid rgba(0,0,0,0.2);padding: 8px 10px;'>$message</td>
        </tr>
        <tr style='background-color: #1a1a1a;'>
            <td colspan='2' style='padding:10px; color: white;'>
                <span style='display:block; color: white; font-size: 14px; margin-bottom: 6px;'>
                    Thanks and regards
                </span>
                <a target='_blank' href='https://sklinerestaurants.com' style='color: #e8e8e8; font-size: 14px;'>
                    SkylineRestaurants.com
                </a>
            </td>
        </tr>


    </table>";
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo "Succesfully send mail";
        header("Location: success.php");

    } catch (Exception $e) {
        echo "<h1>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h1>";
    }


}



?>