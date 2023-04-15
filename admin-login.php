
<?php require_once('header.php')?>


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
     <section class="studen_admin_login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xxl-6 col-lg-6 ">
                    <img src="image/admin-login-img.png" alt="admin login not found">
                </div>


                <div class="col-md-6 col-xxl-6 col-lg-6 ">
                    <div class="admin_login_form">
                    <form action="php_core/login_core.php?admin=true" method="post">
                    <div class="studen">
                    <span class='login-icon-avater'><i class="bi bi-person-fill-lock"></i></span>
                        <h2>Admin Login</h2>
                    </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control in-field" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control in-field" id="pwd" placeholder="Enter password" name="pswd" required>
                        </div>
                        <div class="form-check mb-5">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <input type="submit" name="submit" class="d-block m-auto btn btn-success btn-lg submit-btn" value="submit" id="">
                        <a class="froget-pass m-3" href="">Forget Password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!--login part END-->

     <?php 
     
     
     ?>
     

     <?php require_once('footer.php')?> 
      
  