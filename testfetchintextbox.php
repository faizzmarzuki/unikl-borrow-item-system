<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,"form_unikl");

if(isset($_POST['search_post_btn']))
{
    $id = $_POST['IDN'];

    $query = "SELECT * FROM form_student WHERE IDN = '$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <tr>
            <th class="msg">ID</th>
            <td><input type="text" class="txtbox" name="id" id="id" value="<?php echo $row['IDN'] ?>"></td>
            </tr>
            <tr>
            <th class="msg">Name</th>
            <td><input type="text" class="txtbox" name="Name" id="Name" value="<?php echo $row['Name'] ?>"></td>
            </tr>
            <tr>
            <th class="msg">Email</th>
            <td><input type="text" class="txtbox" name="Email" id="Email" value="<?php echo $row['Email'] ?>"></td>
            </tr>
            <tr>
            <th class="msg">Phone</th>
            <td><input type="text" class="txtbox" name="Phone" id="Phone" value="<?php echo $row['Phone'] ?>"></td>
            </tr>
            <?php
        }
    }
}
?>