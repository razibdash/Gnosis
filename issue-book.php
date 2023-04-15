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
     require_once("config/configer.php");
    ?>
   
    <section>
        <div class="container-fluid">
           <div class="admin-section">
           <div class="row">
                <div class="col-md-2 col-xxl-2 col-lg-2 p-0">
                <?php
                   require_once("side_bar.php");
                  ?>
                </div>
                <div class="col-md-10 col-xxl-10 col-lg-10  p-3 mb-auto d-flex justify-content-center ">
                 <div class="student-info-table">
                    <h2>ISSUE BOOK</h2>
                    <div class="container mt-3">  
                    <?php 
    $query="SELECT * FROM `student-issue-book`";

    $data_sharing=mysqli_query($connect,$query);
    ?>
    <table class="table table-hover">
    <thead>
    <tr>
        <th>Serial No</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Issue Details</th>
        <th>Issue Date</th>
    </tr>
    </thead> <tbody>
<?php
   $count=0;
    while($row=mysqli_fetch_assoc($data_sharing))
    {
        
        $bookName=$row['book_name'];
        $author_n=$row['author_name'];
        $issueDetail=$row['issue_detalis'];
        $issueDate=$row['isuue_date'];
        $count++;
        ?>
       
                        <tr>
                        <td><?php echo $count?></td>
                           
                            <td><?php echo $bookName?></td>
                            <td><?php echo $author_n?></td>
                            <td><?php echo  $issueDetail?></td>
                            <td><?php echo $issueDate?></td>
        
                        </tr>
                
 <?php    
    }
    
    
    
    ?>     </tbody>   
                    </table>
                    </div>
                 </div>
              </div>
              </div>
        
        </div>
    </div>

 </body>
</html>