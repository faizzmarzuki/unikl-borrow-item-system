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
<h1><center>IT Services Form</center></h1>
	<?php
	include("db.php");
	$sql = "select * from form_service";
	$result = mysqli_query($conn,$sql);
	?>
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
		$sql = "SELECT * FROM `form_service` WHERE ID = '$searchs' ";
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}else {
		include("db.php");
		$sql = "SELECT * FROM `form_service`";
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	?>
	<?php
	?>
	<center>
	<table id="myTable" cellpadding="5" cellspacing="0" border="1">
	<tr class="header">
	<th>Order No.</th>
	<th>Date</th>
	<th>Staff Name</th>
	<th>ID</th>
	<th>H/P or Ext. No.</th>
	<th>Depatment</th>
	<th>Equipment</th>
	<th>Serial No.</th>
	<th>Type</th>
	<th>Problem Description</th>
	<th>Action Done</th>
	<th></th>
	<th></th>
	<th></th>
	<th>Review</th>
	<th>PIC</th>
	<th>PIC ID</th>
	<th>Date</th>
	</tr>
	
	<?php while($rec = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{ 
	?>	
	<tr>
	<td><?php echo $rec['O_Id']; ?></td>
	<td><?php echo $rec['Date']; ?></td>
	<td><?php echo $rec['Name']; ?></td>
	<td><?php echo $rec['ID']; ?></td>
	<td><?php echo $rec['Tel']; ?></td>
	<td><?php echo $rec['Department']; ?></td>
	<td><?php echo $rec['Equipm_machineT']; ?></td>
	<td><?php echo $rec['Serial_no']; ?></td>
	<td><?php echo $rec['ProblemT']; ?></td>
	<td><?php echo $rec['Problem_desc']; ?></td>
	<td><?php echo $rec['Action_done']; ?></td>
	
	<?php
	if(( $rec['Review'])=="Approved")
	{
	?>
	<td></td>
	<td></td>
	<td><a href="Admin_ViewServices.php?id=<?php echo $rec['O_Id']; ?>">VIEW</a></td>
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
	<td><a href="Admin_ViewServices.php?id=<?php echo $rec['O_Id']; ?>">VIEW</a></td>
	<td><?php echo $rec['Review'];?></td>
	<?php
	}
	?>
	
	<?php
	if(( $rec['Review'])==null)
	{
	?>
	<td><a href="Delete_Services.php?id=<?php echo $rec['O_Id']; ?>">DELETE</a></td>
	<td><a href="Admin_UpdateServices.php?id=<?php echo $rec['O_Id']; ?>">EDIT</a></td>
	<td><a href="Admin_ViewServices.php?id=<?php echo $rec['O_Id']; ?>">VIEW</a></td>
	<td><?php echo ('Has not been approved');?></td>
	<?php
	}
	?>
	<td><?php echo $rec['Tech_staffname']; ?></td>
	<td><?php echo $rec['Techstaff_id']; ?></td>
	<td><?php echo $rec['Date']; ?></td>
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