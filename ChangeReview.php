<?php
include('db.php');

$sql = "UPDATE form_loan SET Review = 'CLOSED' WHERE id='{$_GET['id']}'";

if (mysqli_query($conn,$sql) === TRUE) 
{
    echo "Record is closed. ";
	header('Refresh:0;Admin_TableLoan.php');
} 
else 
{
    echo "Error closed the record. " ;
	header('Refresh:0;Admin_TableLoan.php');
}
?>

