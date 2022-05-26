<html>
  <head>
  <style>
      table,tr,thead ,td{
    border: 2px solid black;
    border-collapse: collapse;
    padding: 10px;
    border-spacing: 50px;
    
}
th{
    background-color:bisque;
}
td{
    background-color: rgb(145, 145, 212);
}
    </style>
    <title>Appointment Details</title>
</head>
<body>
  <table>
    <tr>
      <th>Name</th>
      <th>Mobile Number</th>
      <th>Email Address</th>
</tr>
</html>
<?php
include ("connection.php");
//include'login.php';
$doc=$_GET['user1'];
$sql="SELECT * FROM ".$doc."";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo "
        <tr>
        <td>".$row['name']."</td>
        <td>".$row['mob']."</td>
        <td>".$row['email']."</td>
        </tr>
  ";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
