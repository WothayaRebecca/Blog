<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php
echo "You can now successfully unpublished the post.";?>
<div class="container">
 <div class="row" style="padding-top: 10px; padding-bottom: 10px">
    <div id="row2" class="col-md-2"></div>
    <div class="col-md-8" style="border: groove; padding-top: 10px">
    <?php echo validation_errors()?>
     <!-- <form action = "Pages/login_validation" method  = 'post'> -->
        <form action = "login_validation" name="login_form" onsubmit="return validate_login_form();" method = 'post' style="padding-top: 10px; padding-left: 200px;">          
          <input id="txtinput" type="input" name="username" placeholder="username" required ></br><br/>         
          <input id="txtinput" type="password" name="password" placeholder="password" required ></br><br/>
          <input id="txtinput" style="margin-left: 50px" class="btn btn-default" style="color: RoyalBlue" type="submit"  name="submit" value="Login"/>
                
        </form>
      
    </div>
    <div class="col-md-2"></div>
            
       
       
    

 </div> 


</div>
   