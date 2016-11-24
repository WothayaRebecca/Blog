
<div class="container">
 <div class="row">
    <!-- <div class="col-md-2">
    <?php
   
        $image_url='/Images/vibe.jpg';?> 
        <img height="300" width="300" src="<?php echo base_url($image_url);?>" >


    </div> -->
    <div id="row2" class="col-md-8">
            
       <?php echo validation_errors() ?>
       <?php ?>
      <form action = "create" method = 'post'>
          <label style="margin-left: 300px" for="title"><b> Title</b> </label>
          <input id="txtinput" type="input" name="title" ></br><br/>
          <label style="margin-left: 300px; padding-top: 30px" for="text"><b> Text</b></label>
          <textarea id="txtinput" name="text"> </textarea></br>
          <input id="txtinput" style="margin-left: 335px" class="btn btn-default" type="submit"  name="submit" value="create news item"/>
                
        </form>
    </div>

 </div> 


</div>
  
    


 

    
  






  