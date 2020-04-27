
<?php

$connect = mysqli_connect("localhost", "root", "", "insertdeleteedit2");

if (isset($_POST['logindetails'])) {

  $Username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($username) && !empty($password)) {

    $sql = "INSERT INTO `kimathi999logintable`(`username`, `password`) VALUES  ('$username','$password')";

    $qry = mysqli_query($connect, $sql);

    if($qry)
    {
      echo "Login Successfully";
    }
  }

  else {
    echo "All fields must be filled!";
  }
}


if (isset($_POST['signindetails'])) {

  $uname = $_POST['uname'];
  $sname = $_POST['sname'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];
  $password2 = $_POST['password2'];

  if(!empty($username) && !empty($password)) {

    $sql = "INSERT INTO `kimathi999signintable`(`ID`, `uname`, `sname`, `gender`, `country`, `password2`) VALUES ('$uname','$sname','$gender','$country','password2')";

    $qry = mysqli_query($connect, $sql);

    if($qry)
    {
      echo "Login Successfully";
    }
  }

  else {
    echo "All fields must be filled!";
  }
}



?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body
{
  background-color: #0CA7D3;
  font-family: Arial, Helvetica, sans-serif;
}

h2
{
  background-color: #044C62;
  padding: 10px;
  width: 300px;
  color: white;
  border: 5px solid #044C62;
  border-radius: 5px;
  font-weight: lighter;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=radio]
{
  
  margin: 10px;

}


select {
  width: 50%;
  padding: 12px 20px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  margin-top: 10px;
  display: inline-block;
  box-sizing: border-box;
}

button {
  background-color: #044C62;
  color: white;
  padding: 12px 15px;
  margin: 8px 0;
  border: 5px solid #044C62;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
}

button:hover {
  color: white;
  opacity: 0.8;
}

button a
{
  color: white;
  text-decoration: none;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #044C62;
}

.cancelbtn:hover
{
  color: white;
  background-color: red;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 25%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

form
{
  width: 70%;
  margin: auto;
  border: 3px solid #044C62;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}


.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn 
  {
     width: 100%;
  }
}
</style>
</head>
<body>


<h2>Kimathi 999 Login Form</h2>


<div class="loginform">



<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>




<div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.html"  method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/loginimage.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="logindetails"><a href="../index.html">Login</a></button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>



<div class="signupform"  style="font-family: Arial, Helvetica, sans-serif;">

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="index.html"  method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/loginimage.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="uname" required>
        
      <label for="sname"><b>Second Name</b></label>
      <input type="text" placeholder="Enter Second Name" name="sname" required>

      <br>
      <label for="gender"><b>Gender</b></label><br>
      <input type="radio" name="gender"  value="male" checked>Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other<br>


      <label for="country"><b>Country</b></label><br>
      <select name="country" required>
        <option value="Kenya">Kenya</option>
        <option value="Tz">Tanzania</option>
        <option value="Ug">Uganda</option>
        <option value="Rw">Rwanda</option>
      </select>

      <br>
      <label for="psw" ><b>Type password</b></label>
      <input type="password" placeholder="Enter Password" name="password2" required>
        
        <br>
      <label for="psw"><b>Retype password</b></label>
      <input type="password" placeholder="Retype Password" name="password2" required>
        
      <button type="submit" ><a href="../index.html">Login</a></button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id02');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>

</body>

</html>
