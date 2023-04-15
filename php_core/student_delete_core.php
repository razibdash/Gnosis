<?php
$connect=mysqli_connect('localhost','root','','library');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `student_login_info` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    header('Location:../student-info.php?deletedBook=true');
    //echo '<script>window.location.href="../student-info.php?deletedBook=true"</script>';
}else
{
    header('Location:../student-info.php?deletedBook=false');
    //echo '<script>window.location.href="../student-info.php?deletedBook=false"</script>';
}



?>