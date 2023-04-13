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
           <div class="admin-section">
           <div class="row">
                <div class="col-md-2 p-0">
                <?php
                   require_once("side_bar.php");
                  ?>
                </div>
                <div class="col-md-10">
                 <div class="student-info-table">
                    <h2>ISSUE BOOK</h2>
                    <div class="container mt-3">  
                    <?php 
    $connect=mysqli_connect('localhost','root','','library');
    $query="SELECT * FROM `add_book`";

    $data_sharing=mysqli_query($connect,$query);
    ?>
    <table class="table table-hover">
    <thead>
    <tr>
        <th>Serial No</th>
        <th>Book Name</th>
        <th>Book Picture</th>
        <th>Author</th>
        <th>Book Details</th>
        <th>Action</th>
    </tr>
    </thead>
<?php
   $count=0;
    while($row=mysqli_fetch_assoc($data_sharing))
    {
        
        $bookName=$row['book_name'];
        $picture=$row['book_picture'];
        $author=$row['author'];
        $bookDetail=$row['book-Detail'];
        $count++;
        ?>
        <tbody>
                        <tr>
                        <td><?php echo $count?></td>
                           
                            <td><?php echo $bookName?></td>
                            <td><?php echo $picture?></td>
                            <td><?php echo $author?></td>
                            <td><?php echo $bookDetail?></td>
                           
                            <td><a href="student-delete.php?id=<?php echo $id ?>">Delete</a></td>
                            <?php 
                           
                            
                            ?>
                        </tr>
                </tbody>
 <?php    
    }
    
    
    
    ?>        
                    </table>
                    </div>
                 </div>
              </div>
              </div>
        
        </div>
    </div>

 </body>
</html>