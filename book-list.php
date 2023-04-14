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

  <!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
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
                 <div class="student-info-table p-3">
                    <h2>BOOK LIST</h2>
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
        
        $id=$row['id'];
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
                           
                            <td><a href="php_core\book_delete_core.php?id=<?php echo $id ?>&&pictureName=<?php echo $picture?>">Delete</a></td>
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

   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>