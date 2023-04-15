<?php 
	require_once("../config/configer.php");
if(isset($_REQUEST['student']))
{

   $email=$_REQUEST['email'];
   $pass=$_REQUEST['pswd'];
     $query="SELECT * FROM `student_login_info` WHERE  `email`='$email' AND `password`='$pass'";
     $data_adan=mysqli_fetch_assoc(mysqli_query($connect,$query));
    
   if($data_adan )
       {
        header('Location:../studentDashboard.php?sDashboard=true&&2747');
         //echo '<script>window.location.href="../studentDashboard.php?sDashboard=true&&2747"</script>';
       }else
       {
        header('Location:../home.php?../home.php?adminError=checkout');
         //echo '<script>window.location.href="../home.php?adminError=checkout"</script>';
       }
   
}
?>
