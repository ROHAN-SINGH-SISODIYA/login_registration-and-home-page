<?php
 include 'header.php';
?>
<!--validations-->
<script type="text/javascript">
   $(function()
    {
        $("#submitbtn").click(function()
        {
            
            var name2 = $("#name21").val();
            var emailid = $('#email_id').val();
            var gen2 = $('#gender1').val();
            var imagefile1 = $('#imagefile').val();
            var wordfile1 = $('#wordfile').val();            
            var extn = wordfile1.split('.').pop();
            var dob1 = $('#dob_feild').val();
            var pswd1 = $("#password11").val();
            var conpswd1 = $("#password22").val();
            var msg2 = $("#message1").val();

            if ($.trim(name2).length == 0) 
            {
               alert('Please enter your name !');
               return false;
            }
            else if($.trim(emailid).length==0)
            {  
               alert('enter your email id')
               return false;
            }
            else if($.trim(gen2).length==0)
            {  
               alert('enter your gender')
               return false;
            }
            else if($.trim(imagefile1).length==0)
            {  
               alert('Please insert your image')
               return false;
            }           
            else if($.trim(wordfile1).length==0 || extn!='doc' && extn!='docx')
            {  
               alert('Please insert only word file!')
               return false;
            }

            else if($.trim(dob1).length==0)
            {  
               alert('Please enter your dob!')
               return false;
            }
            else if($.trim(pswd1).length==0)
            {  
                 alert('enter password!')
                 return false;
            }
            else if($.trim(conpswd1).length==0)
            {  
                 alert('enter confirm password!')
                 return false;
            }
            else if($.trim(msg2).length==0)
            {  
                 alert('enter some text message!')
                 return false;
            }
            else
            {
            	  if (pswd1 != conpswd1)
                    {
                        alert("Passwords do not match.");
                        return false;
                    }
                   else
                    {
                       return true;
                    } 
            	
            }              

        });
    });
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--validations-->

<!--signup form-->
    <div class="container-fluid"> 
        <div class="row">
             <div class="col-lg-4"></div>
                 <div class="col-lg-8 col-md-12 col-xs-12" style="margin-top: 30px;">  
                      <form method="post" action="db.php"  enctype="multipart/form-data">
                      	 <h3  id="heading_name"><b>REGISTRATION FORM</b></h3>
                      	<div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                                <input type="text" class="form-control" id="name21" style="font-weight: bold;" name="name1" placeholder="NAME" required>   
                            </div>
                       </div>

                       <div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                                <input type="email" id="email_id" class="form-control" style="font-weight: bold;" name="email1" placeholder="MAIL ID" required="required">   
                            </div>
                       </div>

                         <div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                               <select class="form-control" id="gender1" name="gender" style="font-weight: bold;">
                                   <option disabled selected>GENDER</option>
                                   <option value="male">MALE</option>
                                   <option value="female">FEMALE</option>
                                </select>
                            </div>
                       </div>
                        
                       
                       <div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                               <label class="form-control"><input type="file" id="imagefile" accept="image/*" name="file1" style="display:none;">UPLOAD IMAGE</label> 
                            </div>
                       </div>


                         <div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                               <label class="form-control">
                               	UPLOAD WORD FILE ONLY*                               	  	
                               	  	  <input  type="file" id="wordfile"  name="document" style="display: none;">
                               	</label> 
                            </div>
                       </div>

                    
                       <div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                                  <label class="form-control">
                                   BIRTHDAY
                                      <div class="col-md-4 col-xs-5" style="float: right;">
                                      	<select id="dob_feild" name="year2">
                                      		<option disabled selected>YEAR</option>
                                      		<option>1997</option>
                                      		<option>1998</option>
                                      		<option>1999</option>
                                      		<option>2000</option>
                                      		<option>2001</option>
                                      		<option>2002</option>
                                      		<option>2003</option>
                                      		<option>2004</option>
                                      		<option>2005</option>
                                      		<option>2006</option>
                                      		<option>2007</option>
                                      		<option>2008</option>
                                      	</select>
                                      </div>
                                      <div class="col-md-3 col-xs-4" style="float: right;">
                                        <select id="dob_feild" name="month2">
                                        	<option disabled selected>MONTH</option>
                                       		<option>JANUARY</option>
                                      		<option>FEBRUARY</option>
                                      		<option>MARCH</option>
                                      		<option>APRAIL</option>
                                      		<option>MAY</option>
                                      		<option>JUNE</option>
                                            <option>JULY</option>
                                      		<option>AUGUST</option>
                                      		<option>SEPTEMBER</option>
                                      		<option>OCTOBER</option>
                                      		<option>NOVEMBER</option>
                                      		<option>DECEMBER</option>
                                      	</select>
                                      </div>
                                   
                                  </label>                           
                            </div>
                       </div>

                        <div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                                <input type="password" id="password11" class="form-control" style="font-weight: bold;" name="password1"  placeholder="PASSWORD" required> 
                            </div>
                       </div>
                       
                         <div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                                <input type="password" class="form-control" style="font-weight: bold;" name="conpassword"  id="password22" placeholder="RETYPE PASSWORD"> 
                            </div>
                       </div>

                       <div class="row" style="margin-top: 5px;">
                            <div class="form-group col-md-7">
                                <textarea cols="68" rows="5" id="message1" class="form-control" style="font-weight: bold;" name="message" placeholder="MESSAGE" required></textarea>                                 
                            </div>
                       </div>

                       <center>
                       <div class="row">

                       	     <div class="form-group col-lg-2 col-md-2 col-xs-4">
                       	     	<input type="reset" class="btn btn1" value="CANCEL" style="float: left;">
                              
                            </div>
                            <div class="form-group col-lg-2 col-md-2 col-xs-2">
                                <button  type="submit" name="submit" value="submit" id="submitbtn" class="btn btn1" style="float: left;">SAVE</button>
                            </div>
                           
                          
                        </div>
                    </center>
                    </form>
                </div> 
            <div class="col-lg-4"></div>  
        </div>
     </div>
<!--end signup form-->
<?php
 include 'footer.php';
?>