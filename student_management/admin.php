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
    <div class="d_ins">
        <a href="data_ins.php"><button type="button" class="btn btn-success">Inseart</button></a>
        <a href="logout.php"><button type="button" class="btn btn-success">logout</button></a>
     </div>

    <div class="form_l">
        <form>
     
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">roll</th>
                    <th scope="col">class</th>
                    <th scope="col">father name</th>
                    <th scope="col">mother name</th>
                    <th scope="col">image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">delete</th>
                </tr>
                </thead>

                          <?php


                                $conn = mysqli_connect('localhost', 'root', '', 'st_m');

                                $count=1;

                                $rql="SELECT `id`, `name`, `roll`, `f_name`, `m_name`, `img`,`class` FROM `s_id`";

                                $run = mysqli_query($conn, $rql);

                                while ($data=mysqli_fetch_assoc($run)) {
                                    # code...
                                


                            ?>
                                           <tbody>
                <tr>
                    <th scope="row"><?php echo $data['id']; ?></th>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['roll']; ?></td>
                    <td><?php echo $data['class']; ?></td>
                    <td><?php echo $data['f_name']; ?></td>
                    <td><?php echo $data['m_name']; ?></td>
                    <td><img src="img/<?php echo $data["img"];?>" width="198px" height="151px"></td>
                    <td><a href="data_edit.php?id=<?php echo $data['id']; ?>">Edit</a> </td>
                    <td><a href="action_php/data_delete.php?id=<?php echo $data['id']; ?>">Delet</a> </td>
                </tr>
                </tbody>

                <?php

                $count++;

                }

                ?>

              </table>
        </form>
    </div>
</div>

</body>
</html>


<?php


mysqli_close($conn);

?>
