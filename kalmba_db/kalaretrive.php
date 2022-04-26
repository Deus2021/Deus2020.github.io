<?php
include_once 'kalamba.php';
$result=mysqli_query($conn,"SELECT * FROM user");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retrieve</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
   <!-- <link rel="stylesheet" href="lab4.css"> -->
</head>
<body>
      
<div class="container">

<?php
        if(mysqli_num_rows($result)>0)
    ?>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>First name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>comment</td>
        </tr>
        <?php
        $i=0;
        while($row=mysqli_fetch_array($result)){
        ?>
        
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["comment"]; ?></td>
            </tr>
            <?php
                $i++;
                }   
            ?>
    </table>
    <?php

    // 
    //     echo "no result found";
    // }
    ?>
</div>

</body>
</html>