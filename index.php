<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title></title>
</head>
<body>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-lg-1 col-md-1 col-sm-12'>
      </div>
      <div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
        <form action="enter.php" method='post'>
          <h1 class='mt-5 mb-5'>Add a new contact</h1>
          Name<input type="text" name='name' placeholder='' class='form-control no-border-radius mb-3 text-success' required='on'>
          Phone Number</sup><br><input type="text`" name='num' placeholder='' class='form-control no-border-radius mb-3 text-success' required='on'>
          Email<input type="email" name='email' placeholder='' class='form-control no-border-radius mb-3 text-success'>
          <input type="submit" name="submit" value='Add Contact' class="form-control btn btn-lg btn-warning no-border-radius">
        </form>
      </div>
    </div>
    <div class="row">
    <?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname =  'myDB';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   if (!$conn) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   $sql= "SELECT name,num,email FROM details";
   $result = mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0)
   {
       while($row =mysqli_fetch_assoc($result))
       {
           echo "Name ".$row["name"]."<br>"."Number ".$row["num"]."<br>"."Email ".$row["email"];
       }
   }
   else{
       echo "0 results";
   }
   mysqli_close($conn);
   ?>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>