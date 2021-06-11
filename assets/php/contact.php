<?php
$statusMsg = '';
$msgClass = '';
if($_POST['Submit']){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // Recipient email
    $toEmail = 'saadullah1800@gmail.com';
    $emailSubject = 'Contact Request at Alfa Forex by '.$name;
    $htmlContent = '<h2>Contact Request Submitted at Alfa Forex</h2>
    <p>Name: '.$name.'</p>
    <p>Email: '.$email.'</p>
    <p>Subject: '.$subject.'</p>
    <p>Message:: '.$message.'</p>';
    
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // Additional headers
    $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
    
    // Send email
    if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
        header('Location: https://alfaforexofficial.com/index.php?response=1');
        die;
    }else{
        header('Location: https://alfaforexofficial.com/index.php?response=0');
        die;
    }
}
?>