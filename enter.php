<?php
if(isset($_POST['submit']))
  { $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname =  'myDB';
   $name = $_POST['name'];
   $email = $_POST['email'];
   $num = $_POST['num'];
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   if (!$conn) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   echo 'Connected successfully<br>';
   $sql = "INSERT INTO details (name, num, email)
   VALUES ('$name', '$num',$email)";
   if (mysqli_query($conn, $sql)) {
      echo "name saved";
   } else {
      echo 'Could not Save' . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>
