<?php  

require_once("../config/configer.php");

if(isset($_REQUEST['submit']) &&  isset($_REQUEST['addUser']))
{
   $fastName=$_REQUEST['fname'];
   $lastName=$_REQUEST['lname'];
   $email=$_REQUEST['email'];
   $password=$_REQUEST['password'];
   $number=$_REQUEST['number'];
   
   $insert_data="INSERT INTO `student_login_info`(`firstName`, `lastName`, `email`, `password`, `number`)
    VALUES ('$fastName','$lastName','$email','$password','$number')";
    $data = mysqli_query($connect,$insert_data);
    
    if($data)
    {
        echo '<script>window.location.href="../home.php?logdenIn=true"</script>';
    }else
    {
        echo '<script>window.location.href="../sing-up.php?logEror=false"</script>';
    }
   
}


?>