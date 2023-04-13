<!doctype html>
<html lang="en">
  <head>
    <title>Admin pennel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
     <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <div class="header">
        <div class="container-fluid">
           <div class="admin-section">
           <div class="row">
                <div class="col-md-2">
                <?php
                   require_once("side_bar.php");
                  ?>
                </div>
                <div class="col-md-8">
                <div class="new-book">
                <form action="Add-new-book.php" method="post" enctype="multipart/form-data" >
                    <div class="studen">
                    <span><i class="fa-thin fa-key"></i></span>
                        <h2>Add New Book</h2>
                    </div>
                        <div class="mb-3 mt-3">
                            <label for="book_name" class="form-label">Book Name:</label>
                            <input type="text" class="form-control" id="email" placeholder="Book Name" name="book-name" required>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Book Picture:</label>
                            <input type="file" class="form-control" id="file" placeholder="Choose Photo" name="photo" required>
                        </div>
                        <div class="mb-3">
                            <label for="autor" class="form-label">Autor:</label>
                            <input type="text" class="form-control" id="autor" placeholder="Autor Name" name="autor" required>
                        </div>
                        <div class="mb-3">
                            <label for="Details" class="form-label">Book Details:</label>
                            <input type="text" class="form-control" id="Details" placeholder="Book Details" name="Book-Details" required>
                        </div>
                       <input type="submit" value="Submit" class="btn btn-primary" name="submit" id="">
                       
                        </form>
                        </div>
                </div>
            </div>
           </div>
        
        </div>
    </div>

    <?php 
    $connection=mysqli_connect('localhost','root','','library');
    if(isset($_REQUEST['submit']))
    {
        $book_name=$_REQUEST['book-name'];
        $book_photo=$_FILES['photo'];
        $imageName=$book_photo['name'];
        $image_tmp_name=$book_photo['tmp_name'];
        $autor=$_REQUEST['autor'];
        $book_details=$_REQUEST['Book-Details'];
        if(!empty($imageName))
        {
            $loc="photo/";
            move_uploaded_file($image_tmp_name,$loc.$imageName);
        }

            $data_insert="INSERT INTO `add_book`(`book_name`, `book_picture`, `author`, `book-Detail`) 
            VALUES ('$book_name','$imageName','$autor','$book_details')";
              mysqli_query($connection,$data_insert);


    }
    
    ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>