<section class="reserve-section">
    <div class="auto-container">
        <div class="outer-box">
            <div class="row clearfix">
                <div class="reserv-col col-lg-8 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="title">
                            <h2>Online Reservation</h2>
                            <div class="request-info">Booking request <a href="#">+88-123-123456</a> or fill out
                                the order form</div>
                        </div>
                        <div class="default-form reservation-form">
                            <form method="post">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="name" value="" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="tel" name="phone" value="" placeholder="Phone Number"
                                                pattern="[0-9]{10}" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-user"></span>
                                            <select class="l-icon" name="members" required>
                                                <option>1 Person</option>
                                                <option>2 Person</option>
                                                <option>3 Person</option>
                                                <option>4 Person</option>
                                                <option>5 Person</option>
                                                <option>6 Person</option>
                                                <option>7 Person</option>
                                                <option>8 Person</option>
                                                <option>9 Person</option>
                                            </select>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-calendar"></span>
                                            <input class="l-icon datepicker" type="text" name="date" value=""
                                                placeholder="DD-MM-YYYY" required readonly>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-clock"></span>
                                            <select class="l-icon" required name="time">
                                                <option>08 : 00 am</option>
                                                <option>09 : 00 am</option>
                                                <option>10 : 00 am</option>
                                                <option>11 : 00 am</option>
                                                <option>12 : 00 pm</option>
                                                <option>01 : 00 pm</option>
                                                <option>02 : 00 pm</option>
                                                <option>03 : 00 pm</option>
                                                <option>04 : 00 pm</option>
                                                <option>05 : 00 pm</option>
                                                <option>06 : 00 pm</option>
                                                <option>07 : 00 pm</option>
                                                <option>08 : 00 pm</option>
                                                <option>09 : 00 pm</option>
                                                <option>10 : 00 pm</option>
                                                <option>11 : 00 pm</option>
                                            </select>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">

                                            <button type="" name="send" class="theme-btn btn-style-one clearfix">
                                                <span class="btn-wrap">
                                                    <span class="text-one">book a table</span>
                                                    <span class="text-two">book a table</span>
                                                </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="info-col col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="data">
                            <div class="booking-info">
                                <div class="bk-title">Booking request</div>
                                <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
                            </div>
                            <div class="separator"><span></span></div>
                            <ul class="info">
                                <li><strong>Location</strong><br>Restaurant St, Delicious City, London 9578, UK
                                </li>
                                <li><strong>Lunch Time</strong><br>Monday to Sunday <br>11.00 am - 2.30pm</li>
                                <li><strong>Dinner Time</strong><br>Monday to Sunday <br>05.00 pm - 10.00pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["send"])) {
    //Load Composer's autoloader
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $members = $_POST['members'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'skylinerestaurantsltd@gmail.com';                     //SMTP username
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
        $mail->Subject = 'RESERVATION - SkyLine Restaurants';
        $mail->Body = "
      <b> Name : </b> $name <br>
      <b> Phone </b> : $phone <br>
      <b> Members : </b> $members <br>
      <b> Date : </b> $date <br>
      <b> Time : </b> $time <br>
      <b> Message : </b> $message
       ";
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        header("Location: success.php");

        $mail->send();
        // echo "alert('form submitted')"
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

?>