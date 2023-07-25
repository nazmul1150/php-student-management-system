
<?php


    $conn = mysqli_connect('localhost', 'root', '', 'st_m');


if(isset($_POST['submit'])) {

	$id=$_REQUEST['id'];
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $class = $_POST['class'];

  
    $fname = $_FILES['file']['name'];
   // $size = $_FILES['file']['size'];
    //$type = $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];

    move_uploaded_file($tmp_name,'../img/'.$fname);


    $rql="UPDATE `s_id` SET `name` = '$name', `roll` = '$roll', `f_name` = '$f_name', `m_name` = '$m_name', `img` = '$fname',`class`='$class' WHERE `id` = '$id'";

    $run = mysqli_query($conn, $rql);


    if($run===TRUE){


    ?>

    <script>
        alert('data update successfull.');
        window.open('../admin.php', '_self');
    </script>

    <?php
}
else{
	echo "error".$rql."</br>".mysqli_error($conn);
}
}
mysqli_close($conn);

?>