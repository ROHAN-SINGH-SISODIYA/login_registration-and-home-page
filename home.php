<?php
 session_start();
 include("config.php");
 include 'header.php';
 $user = $_SESSION['user'];

 $sql = "select *from registration where email='$user'";
 $result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        $name=$row["fullname"];
        $email=$row["email"];
        $birthday=$row["birthday"];
        $gender=$row['gender'];
        $message=$row['message'];
        $image=$row['images'];
        $file=$row['files'];
    }
}
?>
<!--start home page-->
    <div class="container-fluid"> 
        <div class="row">
        	     <center><h2 style="color: white;margin-top: 40px;"><b>WELCOME</b></h2></center>
        	     <div class="col-lg-2 col-md-2 col-xs-0"></div>
                 <div class="col-lg-6 col-md-6 col-xs-8" style="margin-top: 50px;"> 
                 <div style="margin-top: 20px;">
                 	<table class="table table-borderless">
                 	  <tr>	
                 		<th>NAME:</th>
                 		<td><?php echo $name; ?></td>
                 	  </tr>	

                 	  <tr>	
                 		<th>USER ID:</th>
                 		<td><?php echo $email; ?></td>
                 	  </tr>	

                 	  <tr>	
                 		<th>BIRTHDAY: </th>
                 		<td><?php echo $birthday; ?></td>
                 	  </tr>	
                 	  <tr>	
                 		<th>GENDER: </th>
                 		<td><?php echo $gender; ?></td>
                 	  </tr>	
                 	   <tr>	
                 		<th>MESSAGE: </th>
                 		<td><?php echo $message; ?></td>
                 	  </tr>	
                 	  <tr>	
                 		<th>VIEW FILE: </th>
                 		<td><button class="btn btn3" style="color: black;"><a href="<?php echo 'files/'.$file; ?>">VIEW</a></button></td>
                 	  </tr>	
                 	</table>
                 </div>
                 </div> 
            
            <div class="col-lg-3 col-md-4 col-xs-4" style="margin-top: 70px;">
            	<img src="<?php echo 'images/'.$image;?>" height="180" width="180" class="img-responsive img-circle">
            </div> 

        </div>
     </div>
<!--end home page--> 

<?php
 include 'footer.php';
?>