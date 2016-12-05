<div class="container">
 <div class="row">
  <div id="row2" class="col-md-4" >
       <?php $image_url='/Images/register.jpg';?>          

        <img height="200" width="200" style="float: left" src="<?php echo base_url($image_url);?>" >
  </div>

    <div id="row2" class="col-md-8">
            
       <?php echo validation_errors() ?>
       
      <form action = "register" method = 'post' name="register_form" onsubmit="return validate_register_form();">
          <label style="margin-left: 100px; padding-top: 10px" for="email"><b> Email Address</b> </label>
          <input id="txtinput" type="input" name="email" ></br><br/>  
          <label style="margin-left: 100px" for="username"><b> Username</b> </label>
          <input id="txtinput" type="input" name="username" style="margin-left: 30px"></br>
          <label style="margin-left: 100px; padding-top: 30px" for="password"><b> Password</b></label>
          <input id="txtinput" type="password" name="password" style="margin-left: 30px" br><br/>
          <label style="margin-left: 100px; padding-top: 30px" for=" confirm_password"><b>Password</b></label>
          <input id="txtinput" type="password" name="confirm_password" placeholder="Re_enter password" style="margin-left: 30px"><br/>
          <label style="margin-left: 100px; padding-top: 30px" for="user_type"><b> user_type</b></label>
          <input id="txtinput" type="input" name="user_type" style="margin-left: 30px" br><br/><br>
          <input id="txtinput" style="margin-left: 280px;" class="btn btn-default" type="submit"  name="submit" value="Register"/>
  
      
        </form>
    </div>

 </div> 


</div>
  