<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IT Equipment Loan Table</title>
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
    color: #000833;
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
    border: 1px solid #000833;
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

input[type="date"]::-webkit-inner-spin-button {
    display: none;
}

.item i,
input[type="date"]::-webkit-calendar-picker-indicator {
    position: absolute;
    font-size: 20px;
    color: #a9a9a9;
}

.item i {
    right: 1%;
    top: 30px;
    z-index: 1;
}

[type="date"]::-webkit-calendar-picker-indicator {
    right: 0;
    z-index: 2;
    opacity: 0;
    cursor: pointer;
}

.btn-block {
    margin-top: 20px;
    text-align: center;
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


    td,
    th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #5F6A6A;
        color: white;
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

    * {
        box-sizing: border-box;
    }

    #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 50%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    .input-field {
        width: 50%;
        padding: 5px;
        outline: none;
    }

    .input-field:focus {
        border: 2px solid dodgerblue;
    }

    .center {
        text-align: center;
    }

    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }
    .topnav-right {
      float: right;
    }
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
<br></br>
<h1><center>IT Equipment Loan Table</center></h1>
<form action="" method="POST">
<div class="input-container">
	<i class="fa fa-search"></i>
	<input type="text" name="search" placeholder="Search.." >
	<input type="submit" name="submit">
</div>
</form>
<?php
	if (isset($_POST["submit"])){
		include("db.php");
		$searchs = $_POST["search"];
		$sql = "SELECT *, CURRENT_DATE-Date_End AS 'balance' FROM `form_loan` WHERE IDN = '$searchs'";
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}else {
		include("db.php");
		$sql = "SELECT *, CURRENT_DATE-Date_End AS 'balance' FROM `form_loan`  ";
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	?>
	<?php

	?>
	<center>
	<table id="myTable" cellpadding="5" cellspacing="0" border="1">
	<tr class="header">
	<th>Date</th>
	<th>Name</th>
	<th>Edit</th>
	<th>Delete</th>
	<th>View</th>
	<th>Status</th>
    <th>Lecturer's Name</th>
    <th>Lecturer's Approval</th>
	<?php
	if (isset($_POST["submit"]))
	{?>
	<?php 
	}else{
	?>
	<?php	
	}
	?>
	</tr>
	
  <?php while($rec = mysqli_fetch_array($result,MYSQLI_BOTH))
	{ 
	?>
	<tr>
	<td><?php echo $rec['Date']; ?></td>
	<td><?php echo $rec['Name']; ?></td>
	<?php
	if(( $rec['Review'])=="Approved")
	{
	?>
	<td></td>
	<td></td>
	<td><a href="View_Loan.php?id=<?php echo $rec['id']; ?>">VIEW</a></td>
	<td><?php echo $rec['Review'];?></td>
	<?php
	}
	?>
	
	<?php
	if(( $rec['Review'])=="Not Approved")
	{
	?>
	<td></td>
	<td></td>
	<td><a href="View_Loan.php?id=<?php echo $rec['id']; ?>">VIEW</a></td>
	<td><?php echo $rec['Review'];?></td>
	<?php
	}
	?>
	
	<?php
	if(( $rec['Review'])==null)
	{
	?>

  <td><a href="update1.php?id=<?php echo $rec['id']; ?>">EDIT</a></td>
  <td></td>
	<td><a href="View_Loan.php?id=<?php echo $rec['id']; ?>">VIEW</a></td>
	<td><?php echo ('Has not been approved');?></td>
	<?php
	}
	?>
	<?php
	if(( $rec['Review'])=="Returned")
	{
	?>
	<td></td>
	<td></td>
	<td><a href="View_Loan.php?id=<?php echo $rec['id']; ?>">VIEW</a></td>
	<td><?php echo ('Return');?></td>
	<td></td>
	<?php
	}
	?>
	<?php
	if(( $rec['Review'])=="CLOSED")
	{
	?>
	<td></td>
	<td></td>
	<td></td>
	<td><?php echo ('Closed');?></td>
	<?php
	}
	?>
    <td><?php echo $rec['LName']; ?></td>
    <td><?php echo $rec['LReview']; ?></td>
	<?php
	if (isset($_POST["submit"]))
	{?>
	<?php 
	}else{
	?>	
	<?php	
	}
	?>
	</tr>
	<?php
	}
	?>

	</input>
	</table>
	
	<script>
	function myFunction() {
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");
	  for (i = 1; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
		  txtValue = td.textContent || td.innerText;
		  if (txtValue.toUpperCase().indexOf(filter) > -1) {
			tr[i].style.display = "";
		  } else {
			tr[i].style.display = "none";
		  }
		}       
	  }
	}
	</script>
</center>
<br></br><br></br><br></br><br></br><br></br>


</body>
</html>