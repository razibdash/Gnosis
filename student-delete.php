<?php
$connect=mysqli_connect('localhost','root','','library');
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `student_login_info` WHERE $delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{
    header("location:student-info.php");
}





?>