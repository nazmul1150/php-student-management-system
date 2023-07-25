<?php
session_start();
if (isset($_SESSION['set'])) {
    echo "";
}
else{
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>student management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="d_ins"><a href="admin.php"><button type="button" class="btn btn-success">Back</button></a> </div>
    <div class="text">
        <h2>data update</h2>
    </div>

    <div class="form_m">

        <?php

        $conn= mysqli_connect('localhost','root','','st_m');
        $id=$_REQUEST['id'];

        $qur="SELECT * FROM `s_id` WHERE `id`='$id'";
        $run=mysqli_query($conn,$qur);

        $data=mysqli_fetch_assoc($run);
            # code...
        

        ?>
        <form method="post" action="action_php/data_update.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" required>
                <br>
                <label for="number">Roll:</label>
                <input type="number" class="form-control" name="roll" value="<?php echo $data['roll']; ?>" required>
                <br>
                <label for="number">class:</label>
                <input type="number" class="form-control" name="class" value="<?php echo $data['class']; ?>" required>
                <br>
                <label for="usr">Father Name:</label>
                <input type="text" class="form-control" name="f_name" value="<?php echo $data['f_name']; ?>" required>
                <br>
                <label for="usr">Mother Name:</label>
                <input type="text" class="form-control" name="m_name" value="<?php echo $data['m_name']; ?>" required>
                <br>
                <label for="usr">img:</label>
                <input type="file" class="form-control" name="file" required>
                <br>
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">

            </div>
        </form>

        </div>
        <?php
    
    mysqli_close($conn);

        ?>
    </div>
</div>

</body>
</html>


