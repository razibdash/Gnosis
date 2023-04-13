<?php
require_once("../config/configer.php");
$delete_id=$_REQUEST['id'];
$delete="DELETE FROM `student_login_info` WHERE id=$delete_id";
$d=mysqli_query($connect,$delete);
if($d)
{

    header("location:student-info.php");
}





?>