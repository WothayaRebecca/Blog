
<div class="container">
 <div class="row">
    <!-- <div class="col-md-2">
    


    </div> -->
    <div id="row2" class="col-md-8">
            
       <?php echo validation_errors() ?>
       <?php $text=$news['text']; 
       ?>

      <form action = 'news/update_post' method = 'post'>
          <label style="margin-left: 300px; padding-top: 10px" for="title"><b> Title</b> </label>
          <input id="txtinput" type="input" name="title" value="<?php echo $news['title'];?>" ></br><br/>
          <label style="margin-left: 300px; padding-top: 30px" for="text"><b> Text</b></label>
          <textarea id="txtinput" type="input" name="text" ><?php echo set_value('description',$text);?> </textarea> </br>
          <input id="txtinput" style="margin-left: 335px" class="btn btn-default" type="submit"  name="submit" value="save"/>
                
        </form>
    </div>


 </div> 
 

</div>
  
    


 

    
  






  