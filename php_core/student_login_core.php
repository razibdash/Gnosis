<?php 
	require_once("../config/configer.php");
if(isset($_REQUEST['student']))
{



    //$connection=mysqli_connect('localhost','root','','library');
      $query="SELECT * FROM `student_login_info`";
      $data_adan=mysqli_query($connect,$query);
      while($row=mysqli_fetch_assoc($data_adan))
      {
          
          $eamil_admin=$row['email'];
          $pass_admin=$row['password'];
         
      
     if(isset($_REQUEST['submit']))
     {
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['pswd'];
        if($eamil_admin==$email && $pass_admin==$pass)
        {
            //header("Location:adminDashboard.php");
            echo '<script>window.location.href="../studentDashboard.php"</script>';
        }else
        {
            echo '<script>window.location.href="../home.php?adminError=checkout"</script>';
        }

     }
     
    }
}
?>