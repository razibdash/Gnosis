<?php
   $connect=mysqli_connect('localhost','root','','library');
   if(isset($_REQUEST['s']))
   {
     
     $name=$_REQUEST['Search'];

    $query="SELECT * FROM `student_login_info` WHERE `firstName` LIKE '$name' ";
    $data=mysqli_query($connect,$query);
    if($data)
    {
      echo '<script>window.location.href="../student-info.php"</script>';
    }
     
     
   }

?>
