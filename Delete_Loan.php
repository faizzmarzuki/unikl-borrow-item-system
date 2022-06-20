<?php
include('db.php');

$sql = "DELETE FROM form_loan WHERE id='{$_GET['id']}'";

if (mysqli_query($conn,$sql) === TRUE) 
{
    echo "Record deleted successfully";
	header('Refresh:0;Admin_TableLoan.php');
} 
else 
{
    echo "Error deleting record. " ;
	header('Refresh:0;Admin_TableLoan.php');
}
?>

