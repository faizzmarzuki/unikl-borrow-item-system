<?php include 'filesLogic.php';
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <?php
          include('db.php');

          use PHPMailer\PHPMailer\PHPMailer;
          use PHPMailer\PHPMailer\SMTP;
          use PHPMailer\PHPMailer\Exception;
          
          require 'C:\xampp\htdocs\FORM REEDIT\PHPMailer.php'; 
          require 'C:\xampp\htdocs\FORM REEDIT\SMTP.php'; 
          require 'C:\xampp\htdocs\FORM REEDIT\Exception.php';
          
          $error="";
          if(isset($_POST['save']))
          { 
            $Date=$_POST['TxtToday'];
            $Name=$_POST['txtname'];
            $IDN=$_POST['search_text'];
            $tel=$_POST['txttel'];
            $Email=$_POST['txtemail'];
            
            $sql = "INSERT INTO `form_loan` (`IDN`, `Date`, `Name`, `tel`, `to`) VALUES
            ('$IDN','$Date', '$Name', '$tel', '$Email')";
            $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                
            if(!$query){
            echo "awak masham";
            }else{
            $mail = new PHPMailer(true);
            try {
    
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'it.uniklmitec@gmail.com';                     // SMTP username
            $mail->Password   = 'P@s5w0rd';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587; 
    
            //Recipients
            $mail->setFrom('no-reply@unikl.org', 'no-reply@unikl');
            $mail->addAddress($Email, $Name);     // Add a recipient
    
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Announcement on your apply for loan equipment';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            //echo 'Message has been sent';
            } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
          $mail = new PHPMailer(true);
          try {
  
          //Server settings
          $mail->SMTPDebug = 0;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'it.uniklmitec@gmail.com';                     // SMTP username
          $mail->Password   = 'P@s5w0rd';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
          $mail->Port       = 587; 
  
          //Recipients
          $mail->setFrom('no-reply@unikl.org', 'no-reply@unikl');
          $mail->addAddress('nashikinmarzuki@gmail.com', '');     // Add a recipient
  
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Announcement on student application for loan equipment';
          $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          //echo 'Message has been sent';
          } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
            echo"baik boisz";
          }
        echo "wanginya";          
        }
          ?>
          
          <h3>Upload File</h3>
          <p>IDN</p>
          <input type="text" name="search_text" id="search_text" placeholder="Enter Your ID Number..." class="form-control" required>
          <p>Today's Date</p>
          <input id="TxtToday" name="TxtToday" required>
          <div id="result">
          <p>Name</p>
          <input type="text" name="txtname" required>
          <p>Email</p>
          <input type="text" name="txtemail" required>
          <p>Tel / Ext</p>
          <input type="text" name="txttel" required>
          <br>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>