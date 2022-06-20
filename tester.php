<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "form_unikl");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM form_student
  WHERE IDN LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM form_student WHERE IDN=' '
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result))
{
 if($rec = mysqli_fetch_array($result))
 {
  $output .= '
  
<p>Name</p>
<input type="text" name="txtname" value="'.$rec['Name'].'">
<p>Email</p>
<input type="text" name="txtemail" value="'.$rec['Email'].'">
<p>Tel / Ext</p>
<input type="text" name="txttel" value="'.$rec['Phone'].'">
</div>
</fieldset>
  ';
 }
 echo $output;
}
else
{
 
}

?>