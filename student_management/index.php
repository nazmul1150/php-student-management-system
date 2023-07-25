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
    <div class="logo_l">
        <img src="img/crest.png"/>
    </div>
    <div class="text">
        <h2>Student Management</h2>
        <p>Selected Student Class,name,Roll</p>
    </div>

    <div class="form_m">
    <form method="post" action="index.php">
        <div class="form-group">
            <label for="sel1">Select class (1-5):</label>
            <select class="form-control" id="sel1" name="class">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        <br>
            <label for="pwd">Roll:</label>
            <input type="number" class="form-control" id="roll" name="roll">
            <br>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">

        </div>
    </form>
    </div>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'st_m');

if (isset($_POST['submit'])) {

    
    
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    

    $qur = "SELECT `name`, `roll`, `f_name`, `m_name`, `img`, `class` FROM `s_id` WHERE `roll`='$roll' AND `class`='$class'";


    $run= mysqli_query($conn,$qur);

    $row = mysqli_num_rows($run);
    if($row>0){

        while ($data= mysqli_fetch_assoc($run)) {
            
       

?>


    <table class="table">
                <thead>
                <tr>
                    <th scope="col">class</th>
                    <th scope="col">name</th>
                    <th scope="col">roll</th>
                    <th scope="col">father name</th>
                    <th scope="col">mother name</th>
                    <th scope="col">image</th>
                </tr>
                </thead>

             <tbody>
                <tr>
                    <th scope="row"><?php echo $data['class']; ?></th>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['roll']; ?></td>
                    <td><?php echo $data['f_name']; ?></td>
                    <td><?php echo $data['m_name']; ?></td>
                    <td><img src="img/<?php echo $data["img"];?>" width="198px" height="151px"></td>
                </tr>
                </tbody>

     </table>

 <?php 
 }
}

else{

    echo "error".$qur."<br>".mysqli_error($conn);
}
}

mysqli_close($conn);

?>

</div>

</body>
</html>
