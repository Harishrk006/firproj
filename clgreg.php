

<?php

echo "<pre>"; print_r($_REQUEST);

 echo $name=$_POST["name"]; 
   echo $emailid=$_POST["lname"]; 
      echo $password1=$_POST["fname"]; 
      echo $phone=$_POST["email"]; 
      echo $dob=$_POST["phone"]; 
      echo $degree=$_POST["gender"]; 
      echo $martialstatus=$_POST["course"]; 
      echo $yop=$_POST["file"]; 
      ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clgreg (name, lname, fname, email, phone, gender, course, file)
VALUES ('$name',  '$emailid', '$password1', '$phone', '$dob', '$degree', '$martialstatus', '$yop')"; 

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

