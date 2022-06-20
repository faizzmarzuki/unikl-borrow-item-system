<html> 
<head> 
</head>
<style>
html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
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
      input, select, textarea {
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
      .item:hover p, .item:hover i {
      color: #095484;
      }
      input:hover, select:hover, textarea:hover, .preferred-metod label:hover input {
      box-shadow: 0 0 5px 0 #095484;
      }
      .preferred-metod label {
      display: block;
      margin: 5px 0;
      }
      .preferred-metod:hover input {
      box-shadow: none;
      }
      .preferred-metod-item input, .preferred-metod-item span {
      width: auto;
      vertical-align: middle;
      }
      .preferred-metod-item input {
      margin: 0 5px 0 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
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
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
	  
	  body {
  font-family: Arial, Helvetica, sans-serif;
}
{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5F6A6A ;
  color: white;
}

.navbar {
  overflow: hidden;
  background-color: #000000;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #C0C0C0;
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

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: ;#C0C0C0
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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

.pagination a:hover:not(.active) {background-color: #ddd;}
      }
</style>
<div class="navbar">
  <a href="Main.html" class="active">Home</a>
</div>
<body bgcolor=""> 
<div class = "a">
<center>
<BR></BR>
<?php
include("db.php");
$query = "select * from formv2";
$data = mysql_query($query);
?>
<center><h2>To approve, click on <b>"Review"</b></h2></center> 
<BR></BR>
<table id="myTable" cellpadding="5" cellspacing="0" border="1" size="50%">
<tr>
<th>Date</th>
<th>Name</th>
<th>ID</th>
<th>Action</th>
<th>Status</th>
<th>PIC</th>
</tr>
<?php while($rec = mysql_fetch_array($data)) 
{ 
?>
<tr>
<td><?php echo $rec['Date']; ?></td>
<td><?php echo $rec['Name']; ?></td>
<td><?php echo $rec['id']; ?></td>
<td><a href="Next11.php?id=<?php echo $rec['id']; ?>">Review</a></td>
<td><?php echo $rec['Review']; ?></td>
<td><?php echo $rec['sName']; ?></td>
</tr>
<?php
}
?>
</table>
</center>
<br></br><br></br><br></br><br></br><br></br>
<div class="center">
  <div class="pagination">
  <a href="Next1.php" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  </div>
</div>
</div>
</body> 
</html> 
