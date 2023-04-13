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
     <link rel="stylesheet" href="./css/admin-css.css">

  </head>
  <body>
    <?php 
     $connect=mysqli_connect('localhost','root','','library');
     $query="SELECT * FROM `student_login_info`";
 
     $data_sharing=mysqli_query($connect,$query);
     $count=0;
     while($row=mysqli_fetch_assoc($data_sharing))
     {
         $id=$row['id'];
         $first=$row['firstName'];
         $last_name=$row['lastName'];
         $email=$row['email'];
         $pass=$row['password'];
         $number=$row['number'];
         $count++;
     }
    
    ?>
    <div class="header">
        <div class="container-fluid">
        <div class="admin">
        <a href=""><span><i class="fa-solid fa-book"></i> DASHBOARD</span></a>
        </div>
           <div class="admin-sextion">
           <div class="row">
                <div class="col-md-2">
                    <div class="manu">
                    <ul>
                    <li><a href="add-new-book.php">Add book</a></li>
                        <li><a href="book-list.php">Book List</a></li>
                        <li><a href="student-info.php">Student Info</a></li>
                        <li><a href="issue-book.php">Issue Book</a></li>
                        <li><a href="book-request.php">Book Request</a></li>
                        <li><a href="return-books.php">Return Books</a></li>
                        <li><a href="home.php">LogOut</a></li>
                    </ul>
                    </div>
                </div>