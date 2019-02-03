<?php     
 include 'config.php';
 if (isset($_POST['submit']))
 {

  $name1=$_POST['name1'];
  $em1=$_POST['email1'];
  $gen=$_POST['gender'];
  $mon=$_POST['month2'];
  $year2=$_POST['year2'];
  $pswd=$_POST['password1'];
  $msg=$_POST['message'];
  $dob=$mon."/".$year2;

//image file type  
$name= $_FILES['file1']['name'];
$tmp_name= $_FILES['file1']['tmp_name'];
if (isset($name)) 
{ 
  $path= 'images/';
  if (!empty($name))
    {
        if (move_uploaded_file($tmp_name, $path.$name)) 
        {
        

        }
    }
}
  
//end image file type

//pdf ppt and doc file type
$doc= $_FILES['document']['name'];
$tmp_doc= $_FILES['document']['tmp_name'];	
$allow_extension = array
    (

        "doc",
        "docx",
       
    );

$extnsn = pathinfo($_FILES["document"]["name"], PATHINFO_EXTENSION);
if (!in_array($extnsn, $allow_extension))
{
       ?>
       <script type="text/javascript">
       	    alert("only doc and docx file allowed");         
       </script>
       <?php
        header("Location: index.php");
}    
else
{
if(isset($doc)) 
{ 
  $path= 'files/';
  if (!empty($doc))
    {
        if (move_uploaded_file($tmp_doc, $path.$doc)) 
        {
          
          
        }
    }
}  
   
//end files type  
 

  $qry="INSERT INTO `registration`(`fullname`, `email`, `gender`, `images`, `files`, `password`, `birthday`, `message`) VALUES ('$name1','$em1','$gen','".$name."','".$doc."','$pswd','$dob','$msg');";
  $con1=mysqli_query($conn,$qry);

   if($con1==true) 
   {
       ?>
            <script type="text/javascript">
            	alert("DATA INSERTED...!");
            </script>
       <?php
       header("Location: Login_page.php");
   } 
   else
   {
   	   ?>
          <script type="text/javascript">
          	alert("no data insert...!");
          </script>   
   	  <?php
      header("Location: index.php");
   }
 }
}
?>