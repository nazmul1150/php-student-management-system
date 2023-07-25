<?php

 $conn = mysqli_connect('localhost', 'root', '', 'st_m');

 $id=$_REQUEST['id'];
  $rql="DELETE FROM `s_id` WHERE `id`=$id";
  $run=mysqli_query($conn,$rql);

  if($run){

  	?>

  	<script>alert('data delet successfuly');
  window.open('../admin.php','_self');</script>


  	<?php
  }
  else{
  	echo "error".$rql."<br>".mysqli_error($conn);
  }
  mysqli_close($conn);

?>