     
<?php require_once('header.php')?>

<?php 
 if(isset($_REQUEST['logEror']))
 {
    ?>
    <div class="alert alert-warning" role="alert">
    Sorry!, Someting Want Wrong.
</div>
    <?php 
 }
 ?>


   <section class="sing-up-form student_info">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-xxl-12 col-lg-12 ">
               <div class="form-sing">
                  
               <form action="php_core/new_user_core.php?addUser" method="post" class="was-validated">
                  <div class="row">
                     <div class="col-md-6 col-xxl-6 col-lg-6">
                     <div class="mb-3 mt-3">
                        <label for="pwd" class="form-label">First Name:</label>
                           <input type="text" class="form-control" id="uname" placeholder="First Name" name="fname" required>
                           <div class="valid-feedback">Valid.</div>
                           <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                     </div>
                     <div class="col-md-6 col-xxl-6 col-lg-6">
                     <div class="mb-3 mt-3">
                         <label for="pwd" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="uname" placeholder="Last Name" name="lname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                     </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6 col-xxl-6 col-lg-6">
                     <div class="mb-3 mt-3">
                        <label for="pwd" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="uname" placeholder="Email" name="email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                     </div>
                  </div>
                  <div class="col-md-6 col-xxl-6 col-lg-6">
                  <div class="mb-3 mt-3">
                  <label for="pwd" class="form-label">Number:</label>
                  <input type="text" class="form-control" id="pwd" placeholder="Number" name="number" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
               </div>
                  </div>
                  </div>
                  </div>
               
               <div class="mb-3 mt-3">
               <label for="pwd" class="form-label">Password:</label>
                  <input type="password" class="form-control" id="uname" placeholder="Password" name="password" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
               </div>
 
                <input type="submit" name="submit" value="Submit" class="btn btn-primary mb-3 " id="">
</form>
               </div>
            </div>
         </div>
      </div>
   </section>

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


<?php require_once('footer.php')?> 
      
  