<?php
@session_start(); 

if(isset($_SESSION['username'])){ 
  header("location: index.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 6px 0 2px 0;
}

img.avatar {
  width: 10%;
  border-radius: 20%;
}

.container {
  width: 300px;
  margin: 0 auto; 

}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
</head>
<body>

<h2 >Xiaomi Center Padang</h2>
<?php
    
    if(isset($_COOKIE["message"])){ 
      echo $_COOKIE["message"]; 
    }
    ?>


  <form  method="post" action="k_login.php">
    <div class="imgcontainer">
      <img src="img/t.png" alt="Avatar" class="avatar">
    </div>

   <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
     <input type="submit" name="login" value="Login" class="btn">
    
   </div>

   <div class="container" style="background-color:#f1f1f1">
    
  </div>

  </form>


</body>

</html>