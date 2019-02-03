<?php

session_start();
if(isset($_SESSION['user']))
{
  header('location: home.php');
}
include 'config.php';


if (isset($_POST['submit']))
{
	$email=$_POST['email_id'];
	$password=$_POST['password1'];



	$sql = "select *from registration where email='$email' and password='$password'";
    if(!$run = mysqli_query($conn,$sql))
    {
           echo "not connect";
    }

    $row = mysqli_num_rows($run);

    if ($row<1)
    {

       ?>
            <script type="text/javascript">
                alert("Username And Password Are Not Match...!");
            </script>
       <?php
        header("Location: Login_page.php");
    }
    else
    {
    
         $_SESSION['user']=$email; 
         header("Location: home.php");
    }
   

}	

?>