<?php
$connect=mysqli_connect('localhost','root','','library');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `student_login_info` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    echo '<script>window.location.href="../student-info.php?deletedBook=true"</script>';
}else
{
    echo '<script>window.location.href="../student-info.php?deletedBook=false"</script>';
}



?>