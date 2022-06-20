<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Table.css">
<title>ID Application Form</title>
</head>

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
<br></br>
<h1><center>ID Application Form</center></h1>
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
		$sql = "SELECT * FROM `form_id` WHERE id = '$searchs'";
		$data = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}else {
		include("db.php");
		$sql = "SELECT * FROM `form_id`";
		$data = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	?>
	<center>
	<br><br><br><br>
	<table cellpadding="5" cellspacing="0" border="1">
	<tr>
	<th>Date</th>
	<th>Full Name</th>
	<th>Position</th>
	<th>Department</th>
	<th>IC No</th>
	<th>Contact No</th>
	<th>ID No</th>
	<th>Type</th>
	<th>Other</th>
	<th>Justify</th>
	<th>View</th>
	</tr>
	
	<?php while($rec = mysqli_fetch_array($data,MYSQLI_BOTH)) 
	{ 
	?>
	<tr>
	<td><?php echo $rec['Date']; ?></td>
	<td><?php echo $rec['Name']; ?></td>
	<td><?php echo $rec['Position']; ?></td>
	<td><?php echo $rec['Department']; ?></td>
	<td><?php echo $rec['id']; ?></td>
	<td><?php echo $rec['Type']; ?></td>
	<td><?php echo $rec['Other']; ?></td>
	<td><?php echo $rec['Justify']; ?></td>
	<td><a href="Admin_ViewID.php?id=<?php echo $rec['id']; ?>">VIEW</a></td>
	<td><a href="Admin_UpdateID.php?id=<?php echo $rec['id']; ?>">EDIT</a></td>
	<td><?php echo $rec['Note']; ?></td>
	</tr>
	<?php
	}
	?>
	
</table>
</center>
</body>
</html>