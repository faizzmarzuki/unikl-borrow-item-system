<html>
<head>
<title>ID Application Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Insert.css">
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
<form action="" method="post">
<?php
include('db.php');
$error="";
if(isset($_POST['btnsave']))
{
	$Date=$_POST['txtdate'];
	$Name=$_POST['txtname'];
	$Position=$_POST['txtposition'];
	$Department=$_POST['txtdpmt'];
	$IC=$_POST['txtic'];
	$Contact_no=$_POST['txtcn'];
	$id=$_POST['txtid'];
	$chkbox = $_POST['chkbox'];
	
    $chkNew = ""; 
 
	foreach($chkbox as $chkNew1) 
	{ 
		$chkNew .= $chkNew1 . ","; 
	}
	$Other=$_POST['txtother'];
  $Justify = $_POST['txtjustify'];
  $Tech_staffname=$_POST['txtnameStaff'];
  $Techstaff_id=$_POST['txtidStaff'];
  $AppDate=$_POST['txtdateStaff'];
  $Note=$_POST['txtnote'];
	
  $sql = "INSERT INTO form_id (Date, Name, Position, Department, IC, Contact_no, id, Type, Other, Justify, Tech_staffname, Techstaff_id, AppDate, Note) VALUES
  ('$Date','$Name','$Position','$Department','$IC','$Contact_no','$id','$chkNew','$Other','$Justify', '$Tech_staffname', '$Techstaff_id', '$AppDate', '$Note')";
  
  $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
}
?>


<div class="item">
<h1 class = "serif">ID APPLICATION FORM</h1>
<fieldset>
<legend>Applicant Information</legend>
<p>Date</p>
<input type="date" name="txtdate" required/>
<p>Full Name</p>
<input type="text" name="txtname">
<p>Position</p>
<input type="text" name="txtposition">
<p>Department</p>
<input type="text" name="txtdpmt">
<p>IC No</p>
<input type="text" name="txtic">
<p>Contact No</p>
<input type="text" name="txtcn">
<p>ID No</p>
<input type="text" name="txtid">
</div>
</fieldset>

<fieldset>
<legend>Type of Application</legend>
<div class="item preferred-metod">
          <p>Type of Application</p>
          <div class="preferred-metod-item">
            <label><input type="checkbox" name="chkbox[]" value="New User(Staff/Student)"><span>New User(Staff/Student)</span></label>
            <label><input type="checkbox" name="chkbox[]" value="Transfer(Staff/Student)"><span>Transfer(Staff/Student)</span></label>
            <label><input type="checkbox" name="chkbox[]" value="Reprogram Card"><span>Reprogram Card</span></label>
			<label><input type="checkbox" name="chkbox[]" value="Lost Card"> <span>Lost Card</span></label>
			<label><input type="checkbox" name="chkbox[]" value="Damage Card/Printing Error"> <span>Damage Card / Printing Error</span></label>
			<label><input type="checkbox" name="chkbox[]" value="Thumbprint"> <span>Thumbprint</span></label>
			<label><input type="checkbox" onclick="myFunction1()" name="chkbox[]" value="Others"><span>Others</span></label>
			<p id = "others"</p>
			<script>
			function myFunction1() {
			  document.getElementById("others").innerHTML = 
			  "Others, please specify:";
			}
			</script>
          </div>
</div>
		<div class="item">
          <input type ="text" name="txtother"/>
        </div>
<div class = "item">
<p>Justification</p>
<textarea rows="5" name="txtjustify"></textarea>
</div>
</fieldset>
<fieldset>
            <legend>Attend By</legend>
            <p>Staff Name</p>
            <input type="text" name="txtnameStaff">
            <p>ID No</p>
            <input type="text" name="txtidStaff">
            <p>Date</p>
            <input type="date" name="txtdateStaff">
            <p>Note</p>
            <input type="text" name="txtnote">
            </div>
            </div>
</fieldset>
		<div class="btn-block">
          <button class="qa" type="submit" value="Save" name="btnsave" onclick="myFunction()">SEND</button>
		  <script>
			function myFunction() 
			{
			alert("Successfully submitted!");
			}
		  </script>
        </div>
</form>
</body>
</html>