<div class="container">
 
 <div class="row">
  <div id="row2" class="col-md-2" >
   
  </div>

    <div id="row2" class="col-md-8" style="padding-top: 10px;">
    <div class="panel panel-default"> 
    <div class="panel panel-heading">Register</div>
    <div class="panel panel-body">
            
       <?php echo validation_errors() ?>
       
      <form action = "register" method = 'post' name="register_form" onsubmit="return validate_register_form();">   <label style="margin-left: 100px" for="username"><b> Username</b> </label>
          <input id="txtinput" type="input" name="username" placeholder="Username" style="margin-left: 30px"><br><br>
          <label style="margin-left: 100px; padding-top: 10px" for="email"><b> Email Address</b> </label>
          <input id="email" style="font-size: 18px; color: blue;" class="txtinput" type="input" name="email" placeholder="Email Address" onblur="return checkMailStatus();"><br>
          <div id="error" class="errors" style="text-align: center;"></div>
           
          
          <label style="margin-left: 100px; padding-top: 30px" for="password"><b> Password</b></label>
          <input id="txtinput" type="password" name="password" placeholder="Password" style="margin-left: 30px" ><br>
          <label style="margin-left: 100px; padding-top: 30px" for=" confirm_password"><b>Password</b></label>
          <input id="txtinput" type="password" name="confirm_password" placeholder="Re-enter password" style="margin-left: 30px"><br>
          <label style="margin-left: 100px; padding-top: 30px" for="user_type"><b> User Type</b></label>       
          
          <select class="selectpicker show-menu-arrow selectMenu" style="margin-left: 30px;" name="user_type" onchange="document.getElementById('selected_text').value=this.  options[this.selectedIndex].text">
              <option value="2">Admin</option>
              <option value="1">Blogger</option>
              
          </select>
          
          <br><br>
  
          <input id="txtinput buttonAnimate" style="margin-left: 200px;" class="btn btn-info" type="submit"  name="submit" value="Register">
  
      
        </form>
        </div>
    </div>

 </div> 
</div> 

</div>
  