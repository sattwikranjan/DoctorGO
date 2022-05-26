<?php
include ("connection.php");
?>
<!DOCTYPE html>    
<html>    
<head>    
  <style>
  body  
  {  
      margin: 0;  
      padding: 0;  
      background-color:#E8F9FD;  
      font-family: "Monserrat", sans-serif;
  }  
  .loginform{  
          width: 382px;  
          overflow: visible; 
          margin: auto;  
          margin: 20 0 0 450px;  
          padding: 80px;  
          background: #183e97;
          border-radius: 15px ;  
            
  }  
  h2{  
      text-align: center;  
      color: #183e97;  
      padding: 20px;  
  }  
  label{  
      color: #08ffd1;  
      font-size: 17px;
      margin-bottom: 30px;
  }  
  #name,#password{  
      width: 300px;  
      height: 30px;  
      border: none;  
      border-radius: 3px;  
      padding-left: 8px;  
  }  
  #submit{  
      width: auto;  
      height: auto;  
      border: none;  
      border-radius: 17px;  
      padding-left: 7px;   
  }  
  #submit{
    text-align: center;
    background-color: #08d3ae;
    color: #123075;
    font-size: 17;
    padding: 15px 17px;
  }
  #submit:hover{
   background-color: #08ffd1;
  }
</style>
<title>Login Form</title>    
</head>    
<body>    
    <h2>Login page for Doctors</h2><br>    
    <div class="loginform">    
    <form action="" method="post" >    
        <label><b>User Name</b></label>    
        <input type="text" name="name" id="name" placeholder="Username">    
        <br><br>    
        <label><b>Password</b></label>    
        <input type="Password" name="password" id="password" placeholder="Password">    
        <br><br>    
        <input type="submit" name="submit" id="submit" value="Log In Here">       
        <br><br>    

    </form>     
</div>    
</body>    
</html>
<?php
error_reporting(0);
if (isset($_POST['submit']))
{
$user=$_POST['name'];
$pass=$POST['password'];
$sql="SELECT * FROM login";
$result = $conn->query($sql);
// function username()
// {
//    return $user=$_POST['user'];
// }

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["username"]==$user&&$row["password"])
        {
            
            header("Location:display.php?user1=$user");
        }
        else{
            continue;
        }
    }
}
else
{
    echo "Some error occurred";
}
}



?>

