<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
     <link rel="stylesheet" href="./css/home.css">
     <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php 
     require_once("config/configer.php");
    ?>
  <div class="header">
      <div class="container-fluid">
         <div class="admin-section">
         <div class="row">
              <div class="col-md-2 col-xxl-2 col-lg-2 p-0">
                  <?php
                   require_once("side-bar-student.php");
                  ?>
              </div>
              <div class="col-md-10 col-xxl-10 col-lg-10 p-3">
                 <div class="student-info-table">
                 <div class="student">
                    <h2 class='d-inline'>BOOK LIST</h2>
                    <div class="input-group search-bar">
                      <input type="search" class="form-control " placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      <span  class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                      </span>
                    </div> 
                    </div>
                    <div class="container mt-3"> 

                    <?php 
    $query="SELECT * FROM `add_book`";

    $data_sharing=mysqli_query($connect,$query);
    ?>
    <table class="table table-hover">
    <thead>
    <tr>
        <th>Serial No</th>
        <th>Book Picture</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Book Details</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
<?php
   $count=0;
    while($row=mysqli_fetch_assoc($data_sharing))
    {
        
        $id=$row['id'];
        $bookName=$row['book_name'];
        $picture=$row['book_picture'];
        $author=$row['author'];
        $bookDetail=$row['book-Detail'];
        $count++;
        ?>
       
                        <tr>
                        <td class='serial'><?php echo $count?></td>
                            <td><img class='book-img' src="image/book/<?php echo $picture?>" alt="book not found"></td>
                            <td><?php echo $bookName?></td>
                            <td><?php echo $author?></td>
                            <td><?php echo $bookDetail?></td>
                           
                            <td><a href="php_core\book_delete_core.php?id=<?php echo $id ?>&&pictureName=<?php echo $picture?>">Delete</a></td>
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
        
        </div>
    </div>

   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>