<?php
include("connection.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="booking.css">
    <title>Booking</title>
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <h1 class="coninfo" style="text-align: center;">Contact Information</h1>
        
        <hr>
        <h3>Required fields are followed by *</h3>
        <p >Name: * <input type="text" name="Name" id="name" required placeholder="Mention your name"> </p>
       
    </p>
    <p>Email: <input type="email" name="email" id="email" placeholder="Your Email Address"></p>
    <p>Phone Number: *<input type="number" name="mob" id="mob" required placeholder="Enter your mobile number" ></p>
    <P>Select your doctor *
    <select name="doctor"  required>
        <option value="">--Select doctor--</option>
        <option value="doc1">Dr. Ghosh</option>
        <option value="doc2">Dr. Ghatak</option>
        <option value="doc3">Dr. Barman</option>
        <option value="doc4">Dr. Saha</option>
    </select>
    <div class="book">
    <input type="submit" value="Book an appointment" id="button" name="submit">
    </div>
    </form> 
    </div>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
error_reporting(0);
$doctor=$_POST['doctor'];
$name=$_POST['Name'];
$mob=$_POST['mob'];
$email=$_POST['email'];

if($name!="" && $mob!="" && $email!="" && $doctor!="")
{
    
    
    $sql="INSERT INTO ".$doctor." VALUES('$name','$mob','$email')";
    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";
        
    } 
    else
    {
        echo "error";
    }
    
}
}
?>
