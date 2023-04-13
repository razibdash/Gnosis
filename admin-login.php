<!doctype html>
<html lang="en">
  <head>
    <title>LMS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
     <link rel="stylesheet" href="./css/home.css">
  </head>
  <body>

 <!-- Header Part -->
     <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                    <a href="home.php"><span><i class="fa-solid fa-book"></i>LMS</span></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="sing-up">
                     <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Sing-up.php">Sing Up</a></li>
                       
                     </ul>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!-- Header Part END-->
      
<?php 
 if(isset($_REQUEST['adminError']))
 {
    ?>
    <div class="alert alert-warning" role="alert">
    Opps! Your Admin Username & Password Not Founded!!!!
</div>
    <?php 
 }
?>


<!--login part-->
     <div class="studen_admin_login">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <div class="student_login_form">
                   
                   <form action="/action_page.php">
                   <div class="studen">
                     <span class='login-icon-avater'><i class="bi bi-person-fill-lock"></i></span>
                        <h2>Student Login</h2>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="">Forget Password</a>
                    </form>
                   </div>
                </div>


                <div class="col-md-6">
                    <div class="admin_login_form">
                    <form action="php_core/login_core.php?admin=true" method="post">
                    <div class="studen">
                    <span class='login-icon-avater'><i class="bi bi-person-fill-lock"></i></span>
                        <h2>Admin Login</h2>
                    </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="submit" id="">
                        <a href="">Forget Password</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!--login part END-->

     <?php 
     
     
     ?>
     
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>