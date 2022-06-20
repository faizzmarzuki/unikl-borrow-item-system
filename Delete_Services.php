<?php
include('db.php');

$sql = "DELETE FROM form_service WHERE O_Id='{$_GET['O_Id']}'";

if (mysqli_query($conn,$sql) === TRUE) 
{
    echo "Record deleted successfully";
	header('Refresh:0;Admin_TableServices.php');
} 
else 
{
    echo "Error deleting record. " ;
	header('Refresh:0;Admin_TableServices.php');
}
?>

