<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ID Application Form</title>
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
  <a href="main.php" class="active" >Home</a>
  <div class = "dropdown">
  <button class="dropbtn">Insert
  <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-content">
      <a href="Insert_LoanForm.php">IT Equipment Loan Form</a>
      <a href="Insert_IDApplication.php">ID Application Form</a>
      <a href="Insert_Services.php">IT Service Form</a>
    </div>
  </div> 
  <div class = "dropdown">
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
<?php
include('db.php');
$error="";
$O_Id=isset($_REQUEST['O_Id'])? $_REQUEST['O_Id'] : "0";
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
  $Type = $_POST['txttype'];
  $Other = $_POST['txtother'];
	$Problem_desc=$_POST['txtdecs'];
	$Action_done=$_POST['txtaction'];
	$Tech_staffname=$_POST['txtnameStaff'];
	$Techstaff_id=$_POST['txtidStaff'];
	$Date=$_POST['txtdateStaff'];
	$Review=$_POST['txtreview'];
	$sql = "UPDATE `form_service` SET `Call_date` = '$Call_date', 
  `Call_time` = '$Call_time', `Response_date` = '$Response_date', 
  `Response_time` = '$Response_time', `JobC_date` = '$JobC_date', 
  `JobC_time` = '$JobC_time', `Name` = '$Name', 
  `ID` = '$ID', `Department` = '$Department', 
  `Tel` = '$Tel', `Equipm_machineT` = '$Equipm_machineT', 
  `Serial_no` = '$Serial_no', `ProblemT` = '$Type', 
  `Problem_desc` = '$Problem_desc', `Action_done` = '$Action_done', 
  `Tech_staffname` = '$Tech_staffname', `Techstaff_id` = '$Techstaff_id', 
  `Date` = '$Date', `Review` = '$Review'";
			
	$query=mysqli_query($conn,$sql);
	if(!$query){
        echo "awak masham";
      }else{
        echo "wanginya";
      }
    }	
      $query = "select * from form_service where O_Id ='$O_Id'";
      $data = mysqli_query($conn,$query);
      $rec = mysqli_fetch_array($data,MYSQLI_ASSOC);
    ?>	
<form method="post">
<div class="item">
<h1 class = "serif">IT SERVICE FORM</h1>
<fieldset>
<legend>Service</legend>
<p>Order ID</p>
<input type="text" name="txtname" value="<?php echo $rec['O_Id']; ?>"READONLY>
<div class="item">
          <p>Call Date/Time</p>
          <div class="name-item">
            <input type="date" name="txtdate1" value="<?php echo $rec['Call_date']; ?>">
            <input type="time" name="txttime1" value="<?php echo $rec['Call_time']; ?>">
          </div>
</div>
<div class="item">
          <p>Response Date/Time</p>
          <div class="name-item">
            <input type="date" name="txtdate2" value="<?php echo $rec['Response_date']; ?>">
            <input type="time" name="txttime2" value="<?php echo $rec['Response_time']; ?>">
          </div>
</div>
<div class="item">
          <p>Job Close Date/Time</p>
          <div class="name-item">
            <input type="date" name="txtdate3" value="<?php echo $rec['JobC_date']; ?>">
            <input type="time" name="txttime3" value="<?php echo $rec['JobC_time']; ?>">
          </div>
</div>
</div>
</fieldset>
<br></br>
<fieldset>
<legend>Staff details</legend>
<p>Staff Name</p>
<input type="text" name="txtname" value="<?php echo $rec['Name']; ?>">
<p>ID No</p>
<input type="text" name="txtid" value="<?php echo $rec['ID']; ?>">
<p>Department</p>
<input type="text" name="txtdpmt" value="<?php echo $rec['Department']; ?>">
<p>H/P @ Ext No.</p>
<input type="text" name="txthp" value="<?php echo $rec['Tel']; ?>">
</div>
</fieldset>
<br></br>
<fieldset>
<legend>Equipment / Machine</legend>
<p>Equipment / Machine Type</p>
<input type="text" name="txtemt" value="<?php echo $rec['Equipm_machineT']; ?>">
<p>Serial No</p>
<input type="text" name="txtnos" value="<?php echo $rec['Serial_no']; ?>">
<div class="item preferred-metod" >
          <p>Type of Application</p>
                <br>
                <p>Do you want to add or delete the data? Please, write on the textbox if you want to do so.</p>
                <b>[Hardware]</b>
                <b>[Software]</b>
                <b>[Network]</b>
                <b>[Email]</b>
                <b>[Application]</b>
                <b>[Others]</b>

                <div class="preferred-metod-item">
                    <input type="text" name="txttype" size="100%" value="<?php echo $rec['ProblemT']; ?>"READONLY>
                </div>

                <div class="item">
                    <p>Others, please specify:</p>
                    <input type="text" name="txtother" value="<?php echo $rec['Other']; ?>">
                </div>
</div>
<div class = "item">
<p>Problem description</p>
<textarea rows="5" name="txtdecs" ><?php echo $rec['Problem_desc'] ?></textarea>
</div>
<div class = "item">
<p>Action Done</p>
<textarea rows="5" name="txtaction"readonly></textarea>
</div>
</fieldset>
<fieldset>
<legend>Attend By</legend>
<p>Staff Name</p>
<input type="text" name="txtnameStaff" value="<?php echo $rec['Tech_staffname']; ?>"READONLY>
<p>ID No</p>
<input type="text" name="txtidStaff" value="<?php echo $rec['Techstaff_id']; ?>"READONLY>
<p>Date</p>
<input type="date" name="txtdateStaff" value="<?php echo $rec['Date']; ?>"READONLY>
<p>Review</p>
<input type="text" name="txtreview" value="<?php echo $rec['Review']; ?>"READONLY>
</div>
</div>
</fieldset>
<div class="btn-block">
<button class ="qa" type="submit" value="Save" name="btnsave" onclick="location.href='Table_Services.php'">SEND</button>
		  <!--<script>
			function myFunction() {
			alert("Successfully submitted!");
			}
		  </script>-->
</body>
</html>