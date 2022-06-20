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

</div>	
<body>
<?php
include('db.php');
$error="";
if(isset($_POST['btnsave']))
{
	$Call_date=$_POST['txtdate1'];
	$Call_time=$_POST['txtdate1'];
	$Response_date=$_POST['txtdate2'];
	$Response_time=$_POST['txtdate2'];
	$JobC_date=$_POST['txtdate3'];
	$JobC_time=$_POST['txtdate3'];
	$Name=$_POST['txtname'];
	$ID=$_POST['txtid'];
	$Department=$_POST['txtdpmt'];
	$Tel=$_POST['txthp'];
	$Equipm_machineT=$_POST['txtemt'];
	$Serial_no=$_POST['txtnos'];
	
	$chkbox = $_POST['chkbox'];
	
    $chkNew = ""; 
 
	foreach($chkbox as $chkNew1) 
	{ 
		$chkNew .= $chkNew1 . ","; 
	}
	$Problem_desc=$_POST['txtdecs'];
	$Problem_desc=$_POST['txtdecs'];
	$Action_done=$_POST['txtaction'];
	$Tech_staffname=$_POST['txtnameStaff'];
	$Techstaff_id=$_POST['txtidStaff'];
	$Date=$_POST['txtdateStaff'];
  $Review=$_POST['txtreview'];
  
  $sql = "INSERT INTO `form_service` (`Call_date`, `Call_time`, `Response_date`, `Response_time`, `JobC_date`, `JobC_time`, `Name`, `ID`, `Department`, `Tel`, `Equipm_machineT`, `Serial_no`, `ProblemT`, `Problem_desc`, `Action_done`, `Tech_staffname`, `Techstaff_id`, `Date`, `Review`) VALUES
  ('$Call_date', '$Call_time', '$Response_date', '$Response_time', '$JobC_date', '$JobC_time', '$Name', '$ID', '$Department', '$Tel', '$Equipm_machineT', '$Serial_no', '$chkNew1', '$Problem_desc', '$Action_done', '', '', '', '')";
  
    $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if(!$query){
      echo "awak masham";
    }else{
      echo "wanginya";
  }
}
?>

<form action="" method="post">
<div class="item">
<h1 class = "serif">IT SERVICE FORM</h1>
<fieldset>
<legend>Service</legend>
<div class="item">
          <p>Call Date/Time</p>
          <div class="name-item">
            <input type="date" name="txtdate1">
            <input type="time" name="txttime1">
          </div>
</div>
<div class="item">
          <p>Response Date/Time</p>
          <div class="name-item">
            <input type="date" name="txtdate2" READONLY>
            <input type="time" name="txttime2" READONLY>
          </div>
</div>
<div class="item">
          <p>Job Close Date/Time</p>
          <div class="name-item">
            <input type="date" name="txtdate3" READONLY>
            <input type="time" name="txttime3" READONLY>
          </div>
</div>
</div>
</fieldset>
<br></br>
<fieldset>
<legend>Staff details</legend>
<p>Staff Name</p>
<input type="text" name="txtname">
<p>ID No</p>
<input type="text" name="txtid">
<p>Department</p>
<input type="text" name="txtdpmt">
<p>H/P @ Ext No.</p>
<input type="text" name="txthp">
</div>
</fieldset>
<br></br>
<fieldset>
<legend>Equipment / Machine</legend>
<p>Equipment / Machine Type</p>
<input type="text" name="txtemt">
<p>Serial No</p>
<input type="text" name="txtnos">
<div class="item preferred-metod">
          <p>Problem Type</p>
          <div class="preferred-metod-item">
            <label><input type="checkbox" name="chkbox[]" value="Hardware"> <span>Hardware</span></label>
            <label><input type="checkbox" name="chkbox[]" value="Software"> <span>Software</span></label>
            <label><input type="checkbox" name="chkbox[]" value="Network"> <span>Network</span></label>
			<label><input type="checkbox" name="chkbox[]" value="Email"> <span>Email</span></label>
			<label><input type="checkbox" name="chkbox[]" value="Application"> <span>Application</span></label>
			<label><input type="checkbox" name="chkbox[]" value="Others"> <span>Others</span></label>
          </div>
</div>
<div class = "item">
<p>Problem description</p>
<textarea rows="5" name="txtdecs"></textarea>
</div>
<div class = "item">
<p>Action Done</p>
<textarea rows="5" name="txtaction" READONLY></textarea>
</div>
</fieldset>
</fieldset>
<fieldset>
<legend>Attend By</legend>
<p>Staff Name</p>
<input type="text" name="txtnameStaff"READONLY>
<p>ID No</p>
<input type="text" name="txtidStaff"READONLY>
<p>Date</p>
<input type="date" name="txtdateStaff"READONLY>
<p>Review</p>
<input type="text" name="txtreview"READONLY>
</div>
</div>
</fieldset>
<div class="btn-block">
          <button class ="qa" type="submit" value="Save" name="btnsave" onclick="myFunction()">SEND</button>
 </div>  
		  <script>
			function myFunction() {
			alert("Successfully submitted!");
			}
		  </script>
</body>
</html>