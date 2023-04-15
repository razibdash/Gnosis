<?php
 require_once("../config/configer.php");
 if(isset($_REQUEST['submit']))
 {
    $b_name=$_REQUEST['rt_name'];
    $b_book=$_REQUEST['rt_book'];

    $insert="INSERT INTO `return_books`(`student_n`, `book_n`)
     VALUES ('$b_name','$b_book')";
     $data=mysqli_query($connect,$insert);
     if($data)
     {
       echo '<script>window.location.href="../student_return_book.php"</script>';
     }else
     {
       echo '<script>window.location.href="../student_return_book.php?addedError=true"</script>';
     }
 }




?>