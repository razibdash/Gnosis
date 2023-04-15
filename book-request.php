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
  <?php 
     require_once("config/configer.php");
    ?>
  <body>
    <?php 
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
    <section>
              
               <div class="admin-section">
                  <div class="container-fluid">
                    <div class="row">
                     <div class="col-md-2 col-xxl-2 col-lg-2 p-0">
                <?php 
                require_once("side_bar.php");
                
                ?>
            </div>
            <div class="col-md-10 col-xxl-10 col-lg-10  p-3 mb-auto d-flex justify-content-center ">
            <div class="student-info-table">
                    <h2>BOOK REQUEST</h2>
                    <div class="container mt-3">  
                    <?php 
                        $connect=mysqli_connect('localhost','root','','library');
                        $query="SELECT * FROM `student_book_request`";

                        $data_sharing=mysqli_query($connect,$query);
                        ?>
                        <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Student Name</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Request Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php
                    $count=0;
                        while($row=mysqli_fetch_assoc($data_sharing))
                        {
                            
                            $student_name=$row['student_name'];
                            $book_name=$row['book_name'];
                            $author_name=$row['author_name'];
                            $request_date=$row['request_date'];
                            $count++;
                            ?>
                            
                        <tr>
                        <td><?php echo $count?></td>
                           
                            <td><?php echo $student_name?></td>
                            <td><?php echo $book_name?></td>
                            <td><?php echo $author_name?></td>
                            <td><?php echo $request_date?></td>
                           
                            <td><a href=".php?id=<?php echo $id ?>">Delete</a></td>
                            <?php        
                            ?>
                        </tr>
                
        <?php    
    }  
           ?>  
           </tbody>      
                    </table>




             
            </div>
        </div>
       </div>
    </div> 
             
       
 </body>
</html>