<?php
 include 'header.php';
?>
 <!--Login form-->
    <div class="container-fluid"> 
        <div class="row">
             <div class="col-lg-4"></div>
                 <div class="col-lg-8 col-md-12 col-xs-12" style="margin-top: 30px;">  
                      <h3 id="heading_name" style="color: white;"><b>SIGN IN</b></h3>
                      <form method="post" action="login.php">
                       <div class="row" style="margin-top: 20px;">
                            <div class="form-group col-md-5">
                                <input type="email" class="form-control" style="font-weight: bold;" name="email_id" placeholder="MAIL ID" required>   
                            </div>
                       </div>

                       <div class="row" style="margin-top: 20px;">
                            <div class="form-group col-md-5">
                                <input type="password" class="form-control" style="font-weight: bold;" name="password1" placeholder="PASSWORD" required> 
                                <p align="right" style="margin-top: 10px;"><b>IF NOT AN USER</b> <a href="index.php" style="color: white;"><b>SIGN UP</b></a></p>  
                            </div>
                       </div>

                       <div class="row">
                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                            <button  type="submit" name="submit" class="btn btn1">LOGIN</button>   
                            </div>
                        </div>
                       </form>
                </div> 
            <div class="col-lg-4"></div>  
        </div>
     </div>
<!--end login form-->
<?php
 include 'footer.php';
?>