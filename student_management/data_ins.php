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
        <h2>data inseart</h2>
    </div>

    <div class="form_m">
        <form method="post" action="data_ins.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" name="name" required>
                <br>
                <label for="number">Roll:</label>
                <input type="number" class="form-control" name="roll" required>
                <br>
                <label for="number">class:</label>
                <input type="number" class="form-control" name="class" required>
                <br>
                <label for="usr">Father Name:</label>
                <input type="text" class="form-control" name="f_name" required>
                <br>
                <label for="usr">Mother Name:</label>
                <input type="text" class="form-control" name="m_name" required>
                <br>
                <label for="usr">img:</label>
                <input type="file" class="form-control" name="file" required>
                <br>
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">

            </div>
        </form>
    </div>
</div>

</body>
</html>


<?php


    $conn = mysqli_connect('localhost', 'root', '', 'st_m');


if(isset($_POST['submit'])) {




    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $class = $_POST['class'];

  
    $fname = $_FILES['file']['name'];
   // $size = $_FILES['file']['size'];
    //$type = $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];

    move_uploaded_file($tmp_name,'img/'.$fname);



    $rql="INSERT INTO `s_id` (`name`, `roll`, `f_name`, `m_name`, `img`,`class`) VALUES ('$name', '$roll', '$f_name', '$m_name', '$fname',$class)";

    $run = mysqli_query($conn, $rql);


    ?>

    <script>
        alert('data create successfull.');
        window.open('admin.php', '_self');
    </script>

    <?php
}
mysqli_close($conn);

?>
