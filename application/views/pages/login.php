
 <div class="row" style="padding-top: 10px; padding-bottom: 10px">
    <div id="row2" class="col-md-2"></div>

    <div class="col-md-8" style="padding-top: 10px">
    <div class="panel panel-default">
    <div class="panel panel-heading">Login</div>
    <div class="panel panel-body">
    <?php echo validation_errors()?>
     <!-- <form action = "Pages/login_validation" method  = 'post'> -->
        <form action = "login_validation" name="login_form" onsubmit="return validate_login_form();" method = 'post' style="padding-top: 10px; padding-left: 200px;">          
          <input id="txtinput" type="input" name="username" placeholder="username" required ></br><br/>         
          <input id="txtinput" type="password" name="password" placeholder="password" required ></br><br/>
          <label>
          <input type="checkbox" name="checkbox">Remember me</label><br>
          <input id="txtinput" style="margin-left: 50px" class="btn btn-info" style="color: RoyalBlue" type="submit"  name="submit" value="Login"/>
                
        </form>
        </div>
        <div class="panel panel-footer">
        <?php 

        $url = site_url('/pages/wrong_pass');?>
        <a style="float: right;" href="<?php echo $url;?>">Forgot your password</a>
      
    </div>
    <div class="col-md-2"></div>
            
       
       
    

 </div> 


</div>
   