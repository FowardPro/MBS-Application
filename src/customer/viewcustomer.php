<!DOCTYPE html>
<html>
<head>
 <title>MBS PROPERTIES Management System</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-primary text-center" > Customer Data </h1>
            <br>
            <table  id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-info text-white text-center">

                    <th> ID </th>
                    <th> Name </th>
                    <th> Phone </th>
                    <th> RoomNo </th>
                    <th> Verified </th>
                    <th> Delete </th>
                    <th> Update </th>

                </tr >

 <?php

    include '../conn.php'; 
    $q = "SELECT * FROM customer";

    $query = mysqli_query($con,$q);

    while($res = mysqli_fetch_array($query)){
?>
    <tr class="text-center">
    <td> <?php echo $res['ID'];  ?> </td>
    <td> <?php echo $res['Name'];  ?> </td>
    <td> <?php echo $res['Phone'];  ?> </td>
    <td> <?php echo $res['RoomNo'];  ?> </td>
    <td> 
        <?php 
            if($res['verified'] == 0){
                echo "unverified";
            }
            else{
                echo "verified";
            }  
        
        ?> 
    </td>
    <td> <button class="btn-danger btn"> <a href="deletecustomer.php?ID=<?php echo $res['ID']; ?>" class="text-white"> Delete </a>  </button> </td>
    <td> <button class="btn-primary btn"> <a href="updatecustomer.php?ID=<?php echo $res['ID']; ?>" class="text-white"> Update </a> </button> </td>
  
 </tr>
 
 
 <?php 
    }
 
  ?>
  
 
            </table>
        <br>
        <br>
        <td class="align-middle">
            <a href="../customer.html">
                <button class="bg-info text-white text-center" type="submit">Back</button>
            </a>
        </td>  

    </div>
</div>

 <script type="text/javascript">
 
    $(document).ready(function(){
        $('#tabledata').DataTable();
    }) 
 
 </script>

</body>
</html>