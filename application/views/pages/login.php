<div class="container">
 <div class="row">
    <div id="row2" class="col-md-8">
            
       
       <?php echo validation_errors()?>
     <!-- <form action = "Pages/login_validation" method = 'post'> -->
     		<form action = "login_validation" method = 'post'>
          <label style="margin-left: 300px" for="username"><b> Username</b> </label>
          <input id="txtinput" type="input" name="username" required ></br><br/>
          <label style="margin-left: 300px; padding-top: 30px" for="password"><b> Password</b></label>
          <input id="txtinput" type="password" name="password" required ></br><br/>
          <input id="txtinput" style="margin-left: 380px" class="btn btn-default" type="submit"  name="submit" value="Login"/>
                
        </form>
    </div>

 </div> 


</div>
   