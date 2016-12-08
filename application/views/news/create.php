
<div class="container">
 <div class="row">
    <!-- <div class="col-md-2">
    


    </div> -->
    <div id="row2" class="col-md-8">
            
       <?php echo validation_errors() ?>
       <?php ?>
      <form action = "create" name="create_form" onsubmit="return validate_create_form();" method = 'post'>
          <label style="margin-left: 250px; padding-top: 10px" for="title"><b> Title</b> </label>
          <input id="txtinput" class="form-control1" type="input" name="title" style="float: right; padding-right: 185px;" ></br><br/>
          <label style="margin-left: 250px; padding-top: 30px" for="text"><b> Text</b></label>
          <textarea id="txtinput" class="form-control1" name="text" rows="20" style="float: right; padding-right: 185px;"> </textarea><br><br><br>
          <input id="txtinput" style="margin-left: 335px; color: white; margin-top: 10px;" class="btn btn-info" type="submit"  name="submit" value="Create news item"/>
                
        </form>
    </div>


 </div> 
 

</div>
  
    


 

    
  






  