<?php
 require_once("../config/configer.php");
 if(isset($_REQUEST['submit']))
 {
    $r_name=$_REQUEST['r_name'];
    $book=$_REQUEST['r_book'];
    $r_autor=$_REQUEST['r_autor'];
   
    $insert="INSERT INTO `student_book_request`(`student_name`, `book_name`, `author_name`) 
     VALUES ('$r_name','$book','$r_autor')";
     mysqli_query($connect,$insert);
     if($insert)
     {
       echo '<script>window.location.href="../Student_book_request.php"</script>';
     }else
     {
       echo '<script>window.location.href="../Student_book_request.php?addedError=true"</script>';
     }
 }




?>