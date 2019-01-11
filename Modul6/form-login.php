<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

body{
  background-image: url(wp2.gif);
  background-size: cover;
  font-family: 'Ubuntu', sans-serif;
  margin-left: 33%;
  margin-top: 16%;
  background-color: red;
}

.container{

background-color:white;
width: 55%;
height: 25%;
border: 5% solid grey;
border-radius: 25px 40px;
position: relative;
margin-top:-50px;
}
.container .inputbox label{
position: absolute;
top: 10px;
left: 80px;
pointer-events: none;
transition: .5;
}
.container .inputbox input:focus~label,.container .inputbox input:valid~label
{
transition: .5s;
top: -18px;
 font-size: 12px;
}
.container .inputbox{position: relative;}
.container .inputbox input
{width: 100%;
padding: 10px;
font-size: 16px;}

.container input[type="submit"]{
border: none;
outline: none;
background: black;
color: white;
width: 80%;
height:35px;
border-radius: 25px;
margin-left: 11%;
cursor: pointer;
-webkit-transition-duration: 0.4s;
transition-duration: 0.4s;
}
.container input[type="submit"]:hover{
opacity: 0.8;
}
.container input[type="text"]{
border-top: none;
border-left: none;
border-right: none;
margin-left: 15%;
width:70%;
transition-duration: 0.8s;
}
.container input[type="text"]{
outline-color: red;
}
.container input[type="password"]{
border-top: none;
border-left: none;
border-right: none;
margin-left: 15%;
width:70%;
}
.name{
outline: none;
}
.password:focus{
outline: none;
}
#username
{
top: 10px;
left: 80px;
pointer-events: none;
transition: .5;
position: absolute;
font-size: 16px;

}
.container .inputbox input:valid~#username,
.container .inputbox input:focus~#username{
transition: .5s;
top: -18px;
font-size: 12px;}

</style>
  </head>
  <body>
      
    <div class="container">


    <h2><center>Login</center></h2>
    <form class="" action="login.php" method="post">
      <p class="inputbox">

<input type="text" name="nis" class="name"required=""value="">
<label for=""id="nis">NIS</label>
      </p>
      <p class="inputbox">

<input type="password" name="password" id="password" required="">
<label >Password</label>
      </p>
      <p>
<input type="checkbox" onclick="myFunction()" style="margin-left:15%">Show Password
      </p>
    <p style="margin-left:15%;">
        Not signed yet ? <a href="add_data.php"> Register Now</a>
    </p>
      <p>
<input type="submit" name="" value="Login" >
      </p>
      <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3 style="text-align:center; color:red;">Username dan Password salah!</h3>';
        }
    }
      ?>
    </div>
    </form>
  </body>
</html>
<script type="text/javascript">
function myFunction()
{
  var x = document.getElementById("password");
  if (x.type === "password")
  {
      x.type = "text";
  }
  else
  {
      x.type = "password";
  }
}
function animasi()
{
  document.getElementById("animasi").style.display = block;
}
</script>
