<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="Insert.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery-ui.js"></script>

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
    color: #000000;
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
    background: transparent;
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
    background: #fff;
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
    background-color: #000833;
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
    background-color: rgba(255, 217, 0, 0.856);
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
    background-color: rgb(199, 202, 0);
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
.topnav-right {
        float: right;
    }
</style>

<title>IT Equipment Loan Form</title>
</head>

<div class="header">
    <h1><center><a href="main.php" class="active"><img src="logo.png" alt="Girl in a jacket" width="200" height="100"></center></a></h1>
  </div>

  <div class="navbar">
    <a href="main.php" class="active">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Insert
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="Insert_LoanForm.php">IT Equipment Loan Form</a>
        <a href="Insert_IDApplication.php">ID Application Form</a>
        <a href="Insert_Services.php">IT Service Form</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">View All
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="Table_loan.php">IT Equipment Loan Form</a>
        <a href="Table_ID.php">ID Application Form</a>
        <a href="Table_Services.php">IT Service Form</a>
      </div>
    </div>
    <div class="topnav-right">
      <a href="Login_Page.php">Log In</a>
    </div>
  </div>

<body>
    <form action="" method="POST">
        <?php
include('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\FORM REEDIT\PHPMailer.php'; 
require 'C:\xampp\htdocs\FORM REEDIT\SMTP.php'; 
require 'C:\xampp\htdocs\FORM REEDIT\Exception.php';

$error="";
if(isset($_POST['btnsave']))
{ 
	$Date=date("Y-m-d",strtotime($_POST['TxtToday']));
	$Name=$_POST['txtname'];
	$Position=$_POST['Make'];
	$IDN=$_POST['search_text'];
	$tel=$_POST['txttel'];
  $Email=$_POST['txtemail'];
  $EmailSV=$_POST['txtTest'];
  $chkbox = $_POST['chkbox'];
  $chkNew = ""; 
	foreach($chkbox as $chkNew1) 
	{ 
		$chkNew .= $chkNew1 . ","; 
	}
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
	$Date_Start=date("Y-m-d",strtotime($_POST['TxtFrom']));
	$Date_End=date("Y-m-d",strtotime($_POST['TxtTo']));
	
  $sql = "INSERT INTO `form_loan` (`IDN`, `Date`, `Name`, `Position`, `tel`, `to`, `toSV`, `Type`, `Other`, `Model1`, `Serial_num1`, `Model2`, `Serial_num2`, `Model3`, `Serial_num3`, `Model4`, `Serial_num4`, `Justify`, `Date_Start`, `Date_End`, `Review`, `sName`) VALUES
  ('$IDN','$Date', '$Name', '$Position', '$tel', '$Email', '$EmailSV', '$chkNew ,', '$Other', '$Model1', '$Serial_num1', '$Model2', '$Serial_num2', '$Model3', '$Serial_num3', '$Model4', '$Serial_num4', '$Justify', '$Date_Start', '$Date_End', '', '')";
	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
      
        if(!$query){
        echo "awak masham";
        }else{
          if($Position=='Staff'){
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
            $mail->Body    = 'Your loan data already been inserted in our database.<br>
                              Please wait for your loan to be approved.<br>
                              Once your loan already been approved, IT Unit will call you as soon as possible.<br>
                              Thank You,<br>
                              IT Unit.';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Data has been sent';
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
          $mail->addAddress('hashim.mamat99@gmail.com', '');     // Add a recipient
  
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Announcement on staff application for loan equipment';
          $mail->Body    = 'Staff name '.$Name.' with ID Number '.$IDN.' apply '.$chkNew.' for event '.$Justify.'.<br>
                            The event start '.$Date_Start.' until '.$Date_End.'.';
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          //echo 'Message has been sent';
          } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
          }elseif($Position=='Student'){
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
            $mail->Body    =  'Your data already inserted.<br>Please wait for your lecturer to approve your loan.<br>Thank you,<br>IT Unit.';
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
          $mail->addAddress($EmailSV, '');     // Add a recipient
  
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Announcement on student application for loan equipment';
          $mail->Body    = 'Student name '.$Name.' with ID Number '.$IDN.' apply '.$chkNew.' for event '.$Justify.'.<br>
                            The event start '.$Date_Start.' until '.$Date_End.'.<br>
                            <a href ="http://localhost/FORM%20REEDITING/Login_PageL.php">Click Here</a>';
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
          $mail->addAddress('hashim.mamat99@gmail.com', '');     // Add a recipient
  
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Announcement on student application for loan equipment';
          $mail->Body    = 'Student name '.$Name.' with ID Number '.$IDN.' apply '.$chkNew.' for event '.$Justify.'.<br>
          The event start '.$Date_Start.' until '.$Date_End.'.';
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          echo 'Data has been sent';
          } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
          }else{
            echo"baik boisz";
          }         
        }
      }
?>
<script>
function changeDropdown()
{
var Make=document.getElementById("cmbMake").value;
if(Make=="Staff")
{
    document.getElementById("txtemail").style.visibility ='hidden';
    document.getElementById("txtTest").style.visibility='hidden';
    // disable require:
    $(".card-payment-info").attr('required', false);
}else{
    document.getElementById("txtemail").style.visibility ='visible';
    document.getElementById("txtTest").style.visibility='visible';
    // enable require
    $(".card-payment-info").attr('required', true);
}
}
</script>

<div class="item">

<h1 class = "serif">IT EQUIPMENT LOAN FORM</h1>
<fieldset>
<legend>Personal Information</legend>
<script type="text/javascript">
   	$(document).ready(function(){
		$("#TxtToday").datepicker({
        format: "yy-mm-dd",
        autoclose: true,
        todayHighlight: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        autoclose: true,
        changeMonth: true,
        changeYear: true,
        minDate: new Date()
        });
	});

  $(document).ready(function(){

load_data();

function load_data(query)
{
 $.ajax({
  url:"tester.php",
  method:"POST",
  data:{query:query},
  success:function(data)
  {
   $('#result').html(data);
  }
 });
}
$('#search_text').keyup(function(){
 var search = $(this).val();
 if(search != '')
 {
  load_data(search);
 }
 else
 {
  load_data();
 }
});
});
</script>
<p>IDN</p>
<input type="text" name="search_text" id="search_text" placeholder="Enter Your ID Number..." class="form-control" required>
<p>Today's Date</p>
<input id="TxtToday" name="TxtToday">
<div id="result">
<p>Name</p>
<input type="text" name="txtname" required>
<p>Email</p>
<input type="text" name="txtemail" required>
<p>Tel / Ext</p>
<input type="text" name="txttel" required>
<br></br>
</div>
<p> Position </p>
<select id="cmbMake" name="Make" onchange="changeDropdown(this.value);" required>
    <option value="Student" >Student</option>
    <option value="Staff" >Staff</option>
</select>
<br></br>
<p id = "txtemail">Supervisor's Email</p>
<div id="txtTest" required>
<?php
$result = mysqli_query($conn,"SELECT * FROM form_lecturer");

echo '<select name="txtTest" class="card-payment-info" required>';
while($row = mysqli_fetch_array($result)){
    echo'<option value ="' . $row['Email'] . '">' . $row['Name'] . '</option>';
}
echo '</select>';
?>
</div>
</div>
</fieldset>

<fieldset>
<legend>Equipment</legend>
<div class="item preferred-metod">
		<p>Type of Equipment</p>
          <div class="preferred-metod-item">
            <input type="checkbox" name="chkbox[]" value="Dekstop" ><span>Dekstop</span>
            <input type="checkbox" name="chkbox[]" value="Laptop" ><span>Laptop</span>
            <input type="checkbox" name="chkbox[]" value="Projector" ><span>Projector</span>
			      <input type="checkbox" name="chkbox[]" value="Printer" ><span>Printer</span>
			      <input type="checkbox" name="chkbox[]" value="Camera" ><span>Camera</span>
			      <input type="checkbox" onclick="myFunction1()" name="chkbox[]" value="Others" ><span>Others</span>
			<p id = "others"></p>

			<script>
			function myFunction1() 
      {
			  document.getElementById("others").innerHTML = 
			  "Others, please specify:";
			}
			</script>
      </div>
</div>
		<div class="item" id = "others">
          <input type ="text" name="txtother"/>
        </div>
		
		  <div class="item">
          <p>The Details Information of Equipment (For Office Use only)</p>
          <div class="name-item">
            <input type="text" name="model1" placeholder="Model"/ READONLY>
            <input type="text" name="num1" placeholder="Serial Number"/ READONLY>
			<input type="text" name="model2" placeholder="Model"/ READONLY>
            <input type="text" name="num2" placeholder="Serial Number"/ READONLY>
			<input type="text" name="model3" placeholder="Model"/ READONLY>
            <input type="text" name="num3" placeholder="Serial Number"/ READONLY>
			<input type="text" name="model4" placeholder="Model"/ READONLY>
            <input type="text" name="num4" placeholder="Serial Number"/ READONLY>
          </div>
        </div>
		 <div class="item">
          <p>Justification</p>
          <textarea rows="5" name="txtjustify" required></textarea>
        </div>
		<div class="item">
    
          <p>Borrow Date</p>
          <div class="name-item">
          <script>
          $(document).ready(function(){
          $("#TxtFrom").datepicker({
          format: "yy-mm-dd",
          defaultDate: new Date(),
          minDate: new Date(),
          onSelect: function(dateStr) 
          {         
              $("#TxtTo").val(dateStr);
              $("#TxtTo").datepicker("option",{ minDate: new Date(dateStr)})
          }
          });
          }); 

          $(document).ready(function(){
		      $("#TxtTo").datepicker({
          format: "yy-mm-dd",
          autoclose: true,
          todayHighlight: true,
          showOtherMonths: true,
          selectOtherMonths: true,
          autoclose: true,
          changeMonth: true,
          changeYear: true,
          minDate: new Date()
          });
      	  }); 
          
           </script>
          <input id="TxtFrom" name="TxtFrom" required>
			    <center><font size="4">to</font></center>
          <input id="TxtTo" name="TxtTo" required>
          </div>
        </div>
		
</fieldset>
		
 <div class="btn-block">
          <button class ="qa" type="submit" value="Save" name="btnsave">SEND</button>
 </div>  
 

		  
</form>
</body>
</html>