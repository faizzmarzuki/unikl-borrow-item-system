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
	  height:60%;
      width: 30%;
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
      margin-top: 50px;
      text-align: center;
      }
	  button.qa {
      width: 150px;
      padding: 10px;
      border: none;      
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button.qa:hover {
      background-color: #0666a3;
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
#borderimg { 
  border: 10px solid transparent;
  padding: 15px;
  border: thick solid WhiteSmoke ;
}
div {
    height: 1000px;
    background: linear-gradient(to bottom right, #ffcc00 0%, #00004d 100%)
}
      }
</style>


<body bgcolor="">
<div> 
<font> 
<center>
<br></br><br></br><br>
<form action="login.php" method="POST" id="borderimg">
<img src = "logo.png" alt = "Logo Unikl" width="250" height="150" > 
<center><h2>To approve, please login to the system first.</h2></center> 
<br>
</font>
<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter username" name="uname"> 
<p></p>
<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" name="pass"> 
<p></p>
<br></br>
<button class="qa" type="submit" value="login" name="submit">Login</button>
<br></br>
You are not an admin ? Click Here <a href="main.php">Home</a>  
</center>
</form> 
</div>
</body> 
</html> 
