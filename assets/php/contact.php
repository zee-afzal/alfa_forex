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
    <p><h4>Name: </h4>'.$name.'</p>
    <p><h4>Email: </h4>'.$email.'</p>
    <p><h4>Subject: </h4>'.$subject.'</p>
    <p><h4>Message:: </h4>'.$message.'</p>';
    
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // Additional headers
    $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
    
    // Send email
    if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
        $statusMsg = 'Your contact request has been submitted successfully !';
        $msgClass = 'succdiv';
    }else{
        $statusMsg = 'Your contact request submission failed, please try again.';
        $msgClass = 'errordiv';
    }
}
?>