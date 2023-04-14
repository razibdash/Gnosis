<?php 
    require_once("../config/configer.php");
    
    if(isset($_REQUEST['submit']) && isset($_REQUEST['newBook']) )
    {
        $book_name=$_REQUEST['book-name'];
        $book_photo=$_FILES['photo'];
        $imageName=$book_photo['name'];
        $image_tmp_name=$book_photo['tmp_name'];
        $autor=$_REQUEST['autor'];
        $book_details=$_REQUEST['Book-Details'];
        if(!empty($imageName))
        {
            $loc="../image/book/";
            move_uploaded_file($image_tmp_name,$loc.$imageName);
        }

            $data_insert="INSERT INTO `add_book`(`book_name`, `book_picture`, `author`, `book-Detail`) 
            VALUES ('$book_name','$imageName','$autor','$book_details')";
              $data = mysqli_query($connect,$data_insert);
              if($data)
              {
                echo '<script>window.location.href="../book-list.php"</script>';
              }else
              {
                echo '<script>window.location.href="../add-new-book.php?addedError=true"</script>';
              }


    }
    
    ?>