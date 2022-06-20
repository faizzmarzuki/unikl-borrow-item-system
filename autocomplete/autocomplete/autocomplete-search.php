<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
$host="localhost";$dbname="testing";$dbpass="";$dbuser="root";$con;
$con=mysqli_connect($host, $dbuser, $dbpass, $dbname);
if(!empty($_POST["keyword"])) {
    $query ="SELECT State_name FROM webstate WHERE State_name like '" . $_POST["keyword"] . "%' ORDER BY State_name LIMIT 0,8";
    $result = mysqli_query($con, $query);
    $count=  mysqli_num_rows($result);
        if($count < 1){
            echo "Not found your state.";
        }
else
{
    $alert='<ul id="state-list">';
    while($row=  mysqli_fetch_array($result)){
        $name=$row["State_name"];
        $alert.="<li onClick='selectState(\"$name\")'>$name</li>";
    }
    $alert.="</ul>";
    echo $alert;
}
} ?>