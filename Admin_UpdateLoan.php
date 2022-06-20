<?php
session_start();  
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>IT Equipment Loan Form</title>
</head>
<style>
html,
body {
    min-height: 100%;
}

body,
div,
form,
input,
select,
p {
    padding: 0;
    margin: 0;
    outline: none;
    font-family: Roboto, Arial, sans-serif;
    font-size: 14px;
    color: #666;
    line-height: 22px;
}

h1 {
    margin: 15px 0;
    font-weight: 400;
}

.testbox {
    display: flex;
    justify-content: center;
    align-items: center;
    height: inherit;
    padding: 3px;
}

form {
    width: 97%;
    padding: 20px;
    background: #fff;
    box-shadow: 0 2px 5px #ccc;
}

input,
select,
textarea {
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input {
    width: calc(100% - 10px);
    padding: 5px;
}

select {
    width: 100%;
    padding: 7px 0;
    background: transparent;
}

textarea {
    width: calc(100% - 6px);
}

.item {
    position: relative;
    margin: 10px 0;
}

.item:hover p,
.item:hover i {
    color: #095484;
}

input:hover,
select:hover,
textarea:hover,
.preferred-metod label:hover input {
    box-shadow: 0 0 5px 0 #095484;
}

.preferred-metod label {
    display: block;
    margin: 5px 0;
}

.preferred-metod:hover input {
    box-shadow: none;
}

.preferred-metod-item input,
.preferred-metod-item span {
    width: auto;
    vertical-align: middle;
}

.preferred-metod-item input {
    margin: 0 5px 0 0;
}

.item i {
    right: 1%;
    top: 30px;
    z-index: 1;
}

.btn-block {
    margin-top: 20px;
    text-align: center;
}

button.qa {
    width: 150px;
    padding: 10px;
    border: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #095484;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
}

button.qa:hover {
    background-color: #0666a3;
}

@media (min-width: 568px) {

    .name-item,
    .city-item {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .name-item input,
    .city-item input {
        width: calc(50% - 20px);
    }

    .city-item select {
        width: calc(50% - 8px);
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .navbar {
        overflow: hidden;
        background-color: #000833;
    }

    .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
        background-color: rgb(199, 202, 0);
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 16px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
        background-color: rgba(255, 217, 0, 0.856);
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .btn {
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857;
        margin-bottom: 0;
        padding: 6px 12px;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
    }

    .btn-bricky {
        background-color: #c83a2a;
        border-color: #b33426;
        color: #ffffff;
        margin: 15px 0 0 5px;
    }

    .btn-primary {
        background-color: #428bca;
        border-color: #357ebd;
        color: #fff;
        margin: 15px 0 0 5px;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 1px;
        text-align: left;
    }

    button.qa {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    button.qa {
        background-color: #008CBA;
    }
    .topnav-right {
        float: right;
    }
    
}
</style>

<div class="header">
<h1><center><a href="adminmain.php" class="active"><img src="logo.png" alt="Girl in a jacket" width="200" height="100"></center></a></h1>
  </div>

  <div class="navbar">
    <a href="adminmain.php" class="active">Home</a>
    <div class="dropdown">
      <button class="dropbtn">View All
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="Admin_TableLoan.php">IT Equipment Loan Form</a>
        <a href="Admin_TableID.php">ID Application Form</a>
        <a href="Admin_TableServices.php">IT Service Form</a>
      </div>
    </div>
    <div class="topnav-right">
      <a href="Login_Page.php">Log Out</a>
    </div>
  </div>

<body>
<?php

include('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\FORM REEDIT\PHPMailer.php'; 
require 'C:\xampp\htdocs\FORM REEDIT\SMTP.php'; 
require 'C:\xampp\htdocs\FORM REEDIT\Exception.php';

$error="";
$id=isset($_REQUEST['id'])? $_REQUEST['id'] : "0";
if(isset($_POST['btnsave']))
{
    $Date=$_POST['txtdate'];
	$Name=$_POST['txtname'];
	$Position=$_POST['txtposition'];
    $IDN=$_POST['txtid'];
    $Email=$_POST['txtemail'];
	$tel=$_POST['txttel'];
	$Type=$_POST['txttype'];
	$Other=$_POST['txtother'];
	$Model1=$_POST['model1'];
	$Serial_num1=$_POST['num1'];
	$Model2=$_POST['model2'];
	$Serial_num2=$_POST['num2'];
	$Model3=$_POST['model3'];
	$Serial_num3=$_POST['num3'];
	$Model4=$_POST['model4'];
	$Serial_num4=$_POST['num4'];
	$Justify=$_POST['txtjustify'];
	$Date_Start=$_POST['start'];
	$Date_End=$_POST['end'];
	$Review=$_POST['Review'];
    $sName=$_SESSION['name'];
    $LReview=$_POST['LReview'];
    $LName=$_POST['LName'];
    $query1 = "UPDATE `form_loan` SET `IDN`='$IDN',`Date`='$Date',`Name`='$Name',`Position`='$Position',`tel`='$tel',`to`='$Email',`toSV`='',
    `Type`='$Type',`Other`='$Other',`Model1`='$Model1',`Serial_num1`='$Serial_num1',`Model2`='$Model2',`Serial_num2`='$Serial_num2',`Model3`='$Model3',`Serial_num3`='$Serial_num3',`Model4`='$Model4',`Serial_num4`='$Serial_num4',`Justify`='$Justify', `Date_Start`='$Date_Start',
    `Date_End`='$Date_End' ,`Review`='$Review',`sName`='$sName',`LName`='$LName',`LReview`='$LReview' WHERE `id`='$id'";

    $sql=mysqli_query($conn,$query1) or die(mysqli_error($conn));
	if($sql)
		{
      if($Review=='Approved'){
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
            $mail->Subject = 'Announcement on your loan has been approved';
            $mail->Body    = 'Your loan already been approved by IT Unit.<br>
                              Please wait a call from IT Unit.<br>
                              Thank You,<br>
                              IT Unit.';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Data has been updated';
            } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
      }elseif($Review='Not Approved'){
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
            $mail->Subject = 'Announcement on your loan did not approved';
            $mail->Body    = 'Your loan did not been approved by your Supervisor.<br>
                              Please contact your supervisors regarding this.<br>
                              Thank You,<br>
                              IT Unit.';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Data has been updated';
            } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
          
         }else{
            echo 'Data has been updated';
          }
         }
            
		} 
		else 
		{
		$error = "Unable to Update!";
		}
				
	$query = "select * from form_loan where id='$id'";
	$data = mysqli_query($conn, $query);
    $rec = mysqli_fetch_array($data,MYSQLI_ASSOC);
    
    
	
?>

<form action= "" method="POST">
<div class="item">
<h1 class = "serif">IT EQUIPMENT LOAN FORM</h1>
<fieldset>
<legend>Personal Information</legend>
<p class = "serif1">Date</p>
<input type="date" name="txtdate" value="<?php echo $rec['Date']; ?>" READONLY>
<p>Name</p>
<input type="text" name="txtname" value="<?php echo $rec['Name']; ?>" READONLY>
<p>Position</p>
<input type="text" name="txtposition" value="<?php echo $rec['Position']; ?>" READONLY>
<p>ID Number</p>
<input type="text" name="txtid" value="<?php echo $rec['IDN']; ?>" READONLY>
<p>Email</p>
<input type="text" name="txtemail" value="<?php echo $rec['to']; ?>" READONLY>
<p>Tel / Ext</p>
<input type="text" name="txttel" value="<?php echo $rec['tel']; ?>" READONLY>
</div>
</fieldset>

<fieldset>
<legend>Equipment</legend>
<div class="item preferred-metod">
		<p>Type of Equipment :</p>
          <div class="preferred-metod-item">
			<input type="text" name="txttype" size="100%" value="<?php echo $rec['Type']; ?>" READONLY>
		  </div>
		 <br>
		<div class="item">
          <p>Others, please specify:</p>
          <input type ="text" name="txtother" value="<?php echo $rec['Other']; ?>" READONLY>
        </div>
		
		  <div class="item">
          <p>The Details Information of Equipment</p>
          <div class="name-item">
            <input type="text" name="model1" placeholder="Model" value="<?php echo $rec['Model1']; ?>">
            <input type="text" name="num1" placeholder="Serial Number" value="<?php echo $rec['Serial_num1']; ?>">
			<input type="text" name="model2" placeholder="Model" value="<?php echo $rec['Model2']; ?>">
            <input type="text" name="num2" placeholder="Serial Number" value="<?php echo $rec['Serial_num2']; ?>">
			<input type="text" name="model3" placeholder="Model" value="<?php echo $rec['Model3']; ?>">
            <input type="text" name="num3" placeholder="Serial Number" value="<?php echo $rec['Serial_num3']; ?>">
			<input type="text" name="model4" placeholder="Model" value="<?php echo $rec['Model4']; ?>">
            <input type="text" name="num4" placeholder="Serial Number" value="<?php echo $rec['Serial_num4']; ?>" >
          </div>
        </div>
		 <div class="item">
          <p>Justification</p>
          <textarea rows="5" name="txtjustify"><?php echo $rec['Justify']; ?></textarea >
        </div>
		<div class="item">
          <p>Borrow Date</p>
          <div class="name-item">
            <input type="date" name="start" value="<?php echo $rec['Date_Start']; ?>" READONLY>
			<center><font size="4">to</font></center>
            <input type="date" name="end" value="<?php echo $rec['Date_End']; ?>" READONLY> 
			
          </div>
        </div>
</fieldset>
<br>

<fieldset>
<legend>For Lecturer Use Only</legend>
<div class="item">
<p>Please type in the textbox <b>[Approved] or [Not Approved]</b></p>
<div class="name-item">
<input type="text" name="LReview" value="<?php echo $rec['LReview']; ?>"READONLY> 
<input type="text" placeholder="Type your name....." name="LName" value="<?php echo $rec['LName']; ?>"READONLY>
</div>
</div>
</fieldset>

<fieldset>
<legend>For Office Use Only</legend>
<div class="item">
<p>Please type in the textbox <b>[Approved] or [Not Approved]</b></p>
<div class="name-item">
<select name="Review" style="width: 380px;">
    <?php
    echo '<option value='.$rec['Review'].'>'.$rec['Review'].'</option>'
    ?>
    <option value="Approved" >Approved</option>
    <option value="Not Approved" >Not Approved</option>
    <option value="Returned" >Returned</option>
    <option value="Closed" >Closed</option>
</select>
<input type="text" placeholder="Type your name....." name="sName" value="<?php echo $_SESSION['name']; ?>"READONLY>
</div>
</div>
</fieldset>

<td><center><button class="qa" type="submit" value="Save" name="btnsave" >SUBMIT</button></center></td>
		  


</form>

</body>
</html>