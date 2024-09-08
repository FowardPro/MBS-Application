<?php

 include '../conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['ID'];
 $name = $_POST['Name'];
 $phone = $_POST['Phone'];
 $roomno = $_POST['RoomNo'];
 
 $q = "UPDATE customer set ID=$id, Name='$name', Phone='$phone', RoomNo='$roomno' where ID=$id";

 $query = mysqli_query($con,$q);

 header('location:viewcustomer.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title>Hotel Reception Management System</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Update Customer </h1>
 </div><br>
 
 <label> Name: </label>
 <input type="text" name="Name" class="form-control"> <br>

 <label> Phone: </label>
 <input type="text" name="Phone" class="form-control"> <br>

 <label> Room No: </label>
 <input type="number" name="RoomNo" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>