<?php
 require_once("../config/configer.php");
 if(isset($_REQUEST['submit']))
 {
    $b_name=$_REQUEST['b_name'];
    $b_autor=$_REQUEST['b_autor'];
    $b_details=$_REQUEST['b_details'];
   

  

    $insert="INSERT INTO `student-issue-book`(`book_name`, `author_name`, `issue_detalis`)
     VALUES ('$b_name','$b_autor','$b_details')";
     mysqli_query($connect,$insert);
     if($insert)
     {
       echo '<script>window.location.href="../student-issue-book.php"</script>';
     }else
     {
       echo '<script>window.location.href="../student-issue-book.php?addedError=true"</script>';
     }
 }




?>