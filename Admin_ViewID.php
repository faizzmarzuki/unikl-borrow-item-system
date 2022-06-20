<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="View.css">
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
        background-color: #C0C0C0;
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
$error="";
$id=isset($_REQUEST['id'])? $_REQUEST['id'] : "0";
if(isset($_POST['btnsave']))
{
	$Date=$_POST['txtdate'];
	$Name=$_POST['txtname'];
	$Position=$_POST['txtposition'];
	$Department=$_POST['txtdept'];
	$IC=$_POST['txtic'];
	$Contact=$_POST['txtcontact'];
	$ID=$_POST['txtid'];
	$Type=$_POST['txttype'];
	$Other=$_POST['txtother'];
	$Justify=$_POST['txtjustify'];
	$Tech_staffname=$_POST['txtnameStaff'];
	$Techstaff_id=$_POST['txtidStaff'];
	$AppDate=$_POST['txtdateStaff'];
	$Note=$_POST['txtnote'];
	$query1 = "update form_id set Date='$Date',Name='$Name',Position='$Position',Department='$Department',IC='$IC',Contact_no='$Contact',id='$ID',Type='$Type',Other='$Other',
	Justify='$Justify',Tech_staffname='$Tech_staffname',Techstaff_id='$Techstaff_id',AppDate='$AppDate',Note='$Note'WHERE id = '$ID'";
	
	if(mysqli_query($conn,$query1))
		{
		$error = "Record Updated!";
		} 
		else 
		{
		$error = "Unable to Update!";
		}
}
				
	$query = "select * from form_id where id='$id'";
	$data = mysqli_query($conn,$query);
	$rec = mysqli_fetch_array($data,MYSQLI_ASSOC);
?>


<form method="POST">
<div id="id">
<div class="item">
<h1 class = "serif">ID APPLICATION FORM</h1>
<fieldset>
<legend>Personal Information</legend>
<p readonly> Date       : <?php echo $rec['Date']; ?></p>
<p readonly> Name       : <?php echo $rec['Name']; ?></p>
<p readonly> Position   : <?php echo $rec['Position']; ?></p>
<p readonly> Department : <?php echo $rec['Department']; ?></p>
<p readonly> IC No      : <?php echo $rec['IC']; ?></p>
<p readonly> Contact No : <?php echo $rec['Contact_no']; ?></p>
<p readonly> ID No      : <?php echo $rec['id']; ?></p>
</div>
</fieldset>

<fieldset>
<legend>Equipment</legend>
<div class="item preferred-metod">
        <div class="preferred-metod-item">
			<p readonly> Type of Application:<?php echo $rec['Type']; ?></p>
		</div>
		<?php
		if(( $rec['Other'])==null)
		{
		?>
		<?php
		}else{
		?>
		<div class="item">
          <p readonly>Others, please specify:<?php echo $rec['Other']; ?></p>
		</div>
		<?php
		}
		?>
		<div class="item">
          <p readonly>Justification : <?php echo $rec['Justify']; ?></p>
        </div>
</fieldset>
</div>
<fieldset>
            <legend>Attend By</legend>
            <p readonly>Staff Name : <?php echo $rec['Tech_staffname']; ?></p>
            <p readonly>ID No : <?php echo $rec['Techstaff_id']; ?></p>
            <p readonly>Date : <?php echo $rec['AppDate']; ?></p>
            <p readonly>Note : <?php echo $rec['Note']; ?></p>
            </div>
            </div>
</fieldset>

		<div class="btn-block">
		<input type="button" value="Print" onclick="printPage('id');"></input>
		<script>
		function printPage(id)
		{	
   			var html="<html>";
   			html+= document.getElementById(id).innerHTML;
   			html+="</html>";
 
   			var printWin = window.open();
   			printWin.document.write(html);
   			printWin.document.close();
  			printWin.focus();
  			printWin.print();
  			printWin.close();
		}
		</script>
        </div>
		
		<br></br>

</form>
</body>
</html>