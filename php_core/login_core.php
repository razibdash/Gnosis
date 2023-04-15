<?php 
	require_once("../config/configer.php");
if(isset($_REQUEST['admin']))
{

    $is = false;
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['pswd'];
      $query="SELECT id FROM `admin` WHERE  `email`='$email' AND `password`='$pass'";
      $data_adan=mysqli_fetch_assoc(mysqli_query($connect,$query));
    if($data_adan )
        {
            header('Location:../adminDashboard.php?adDashboard=true&&26474 ');
           // echo '<script>window.location.href="../adminDashboard.php?adDashboard=true&&26474"</script>';
        }else
        {
            header('Location:../admin-login.php?adminError=checkout');
            //echo '<script>window.location.href="../admin-login.php?adminError=checkout"</script>';
        }
    
     

}
?>