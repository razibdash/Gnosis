<?php
 require_once("../config/configer.php");
$delete_id=$_REQUEST['id'];
$filename = "../image/book/".$_REQUEST['pictureName'];
$delete="DELETE FROM `add_book` WHERE id=$delete_id";
unlink($filename);
$d=mysqli_query($connect,$delete);

if($d)
{
    echo '<script>window.location.href="../book-list.php?deletedBook=true"</script>';
}else
{
    echo '<script>window.location.href="../book-list.php?deletedBook=false"</script>';
}


?>