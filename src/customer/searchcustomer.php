<?php

 include '../conn.php';
 if(isset($_POST['input'])){
     $input = $_POST['input'];
     $query = "SELECT * FROM customer WHERE ID = $input";

     $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res)>0){?>

        <table class = 'table table-bordered table-striped mt-4'>
            <thead>
                <tr class="bg-info text-white text-center">
                    <th> ID </th>
                    <th> Name </th>
                    <th> Phone </th>
                    <th> Room No </th>
                </tr>
            </thead>

            <tbody>
                <?php
                
                while ($row = mysqli_fetch_assoc($res)){
                    $id = $row['ID'];
                    $name = $row['Name'];
                    $phone = $row['Phone'];
                    $roomno = $row['RoomNo'];

                    ?>

                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $phone;?></td>
                        <td><?php echo $roomno;?></td>
                    </tr>

                    <?php
                }

                ?>

        </table>

        <?php
    }
    else{
        echo "<h5 class = 'text-danger text-center mt-3'>No data Found</h5>";
    }
 }


 ?>