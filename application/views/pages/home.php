<div class="container">
<div class="panel panel-default">
 <div class="row">
  <div id="row2" class="col-md-4" >
       <?php $image_url='/Images/register.jpg';?>          

        <img id="imganimate" height="200" width="200" style="float: left" src="<?php echo base_url($image_url);?>" >
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
          <label style="margin-left: 100px; padding-top: 30px" for="user_type"><b> User Type</b></label>       
          
          <select id="cmbMake" style="margin-left: 30px;" name="user_type" onchange="document.getElementById('selected_text').value=this.  options[this.selectedIndex].text">
              <option value="2">Admin</option>
              <option value="1">Blogger</option>
              
          </select><br><br>
  
          <input id="txtinput buttonAnimate" style="margin-left: 200px;" class="btn btn-info" type="submit"  name="submit" value="Register"/>
  
      
        </form>
    </div>

 </div> 
 </div>


</div>
  