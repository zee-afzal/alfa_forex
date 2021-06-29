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
    $toEmail = 'umertaj123@gmail.com';
    $emailSubject = 'Contact Request at Alfa Forex by '.$name;
    $htmlContent = 
    '<table cellpadding="0" cellspacing="0" align="center" width="50%">
    <tr>
      <td height="110" align="center" valign="top"><a href="https://www.alfaforexofficial.com"><img
      src='/email-icon.gif' /></a></td>
    </tr>
    <tr>
      <td align="center"
        style="background:#9acb51;color:#ffffff; font-size:18px; font-family:sans-serif; font-weight:bold; padding:10px;">
        You Got an Email From Alfa Forex!
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center" style="color:yellowgreen; font-weight:bold; font-size:20px;">Hey, Wake Up!</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" style="background-color:#f8f8f8; padding:5px">
        <table cellpadding="0" cellspacing="0" width="100%"
          style="background-color:#f1f1f1; color:#555555; font-size:16px; font-family:sans-serif;">

          <tr>
            <td width="20%"
              style="color:#999999; font-size:16px; font-weight:bold; font-family:sans-serif; border-right:2px solid #f8f8f8; border-bottom:2px solid #f8f8f8; text-transform:capitalize; padding:15px 10px">
              Name</td>
            <td
              style="color:#555555; font-size:16px; font-family:sans-serif; border-bottom:1px solid #f8f8f8; padding:15px 10px;">
              '.$name.'</td>
          </tr>

          <tr>
            <td width="20%"
              style="color:#999999; font-size:16px; font-weight:bold; font-family:sans-serif; border-right:2px solid #f8f8f8; border-bottom:2px solid #f8f8f8; text-transform:capitalize; padding:15px 10px">
              Email</td>
            <td
              style="color:#555555; font-size:16px; font-family:sans-serif; border-bottom:1px solid #f8f8f8; padding:15px 10px;">
              '.$email.'</td>
          </tr>

          <tr>
            <td width="20%"
              style="color:#999999; font-size:16px; font-weight:bold; font-family:sans-serif; border-right:2px solid #f8f8f8; border-bottom:2px solid #f8f8f8; text-transform:capitalize; padding:15px 10px">
              Subject</td>
            <td
              style="color:#555555; font-size:16px; font-family:sans-serif; border-bottom:1px solid #f8f8f8; padding:15px 10px;">
              '.$subject.'</td>
          </tr>

          <tr>
            <td width="20%"
              style="color:#999999; font-size:16px; font-weight:bold; font-family:sans-serif; border-right:2px solid #f8f8f8; border-bottom:2px solid #f8f8f8; text-transform:capitalize; padding:15px 10px">
              Message</td>
            <td
              style="color:#555555; font-size:16px; font-family:sans-serif; border-bottom:1px solid #f8f8f8; padding:15px 10px;">
              '.$message.'</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"
        style="background:#6d6d6d; color:#ffffff; font-size:14px; font-family:sans-serif; padding:10px;">
        <p>Copyright &copy; 2021 All Rights Reserved by Alfa Forex</p>
        <p>Developed by <a style="background-color: transparent;
          text-decoration: none; color:yellowgreen" href="https://wa.me/message/QVL2AVPWRIXDE1" target="blank">Zee
            Ark</a></p>
      </td>
    </tr>
  </table>';

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // Additional headers
    $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
    
    // Send email
    if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
        header('Location: http://www.alfaforexofficial.com/#contactus/?response=0');
        die;
    }else{
        header('Location: http://www.alfaforexofficial.com/#contactus/?response=1');
        die;
    }
}
?>