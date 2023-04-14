<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>sing up</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
   integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/student_info.css">
</head>
<body>
   <div class="sing-up-form student_info">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-xxl-12 col-lg-12 ">
               <div class="form-sing">
                  
               <form action="sing-up.php" method="post" class="was-validated">
               <div class="mb-3 mt-3">
               <label for="pwd" class="form-label">First Name:</label>
                  <input type="text" class="form-control" id="uname" placeholder="First Name" name="fname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
               </div>
               <div class="mb-3 mt-3">
               <label for="pwd" class="form-label">Last Name:</label>
                  <input type="text" class="form-control" id="uname" placeholder="Last Name" name="lname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
               </div>
               <div class="mb-3 mt-3">
               <label for="pwd" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="uname" placeholder="Email" name="email" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
               </div>
               <div class="mb-3 mt-3">
               <label for="pwd" class="form-label">Password:</label>
                  <input type="password" class="form-control" id="uname" placeholder="Password" name="password" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
               </div>
               <div class="mb-3">
                  <label for="pwd" class="form-label">Number:</label>
                  <input type="text" class="form-control" id="pwd" placeholder="Number" name="number" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
               </div>
 
                <input type="submit" name="submit" value="Submit" class="btn btn-primary mb-3 " id="">
</form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <?php  

   $connection=mysqli_connect('localhost','root','','library');  
   if(isset($_REQUEST['submit']))
   {
      $fastName=$_REQUEST['fname'];
      $lastName=$_REQUEST['lname'];
      $email=$_REQUEST['email'];
      $password=$_REQUEST['password'];
      $number=$_REQUEST['number'];
      
      $insert_data="INSERT INTO `student_login_info`(`firstName`, `lastName`, `email`, `password`, `number`)
       VALUES ('$fastName','$lastName','$email','$password','$number')";
       mysqli_query($connection,$insert_data);
      
   }


?>
</body>
</html>