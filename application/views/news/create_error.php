
<div class="container-fluid" style="max-width: 1200px;">
 <div class="row">
    <!-- <div class="col-md-2">
    


    </div> -->
    <div id="row2" class="col-md-8">
            
       <?php echo validation_errors() ?>
       <?php ?>
       <div class="alert alert-warning" role="alert">
         <strong>Warning!</strong> Please login to create a blog post.
       </div>
      <form action = "create" name="create_form" onsubmit="return validate_create_form();" method = 'post'>
          <label style="margin-left: 300px; padding-top: 10px" for="title"><b> Title</b> </label>
          <input id="txtinput" type="input" name="title" ></br><br/>
          <label style="margin-left: 300px; padding-top: 30px" for="text"><b> Text</b></label>
          <textarea id="txtinput" name="text"> </textarea></br>
          <input id="txtinput" style="margin-left: 335px" class="btn btn-default" type="submit"  name="submit" value="create news item"/>
                
        </form>
    </div>


 </div> 
 

</div>
  
    


 

    
  






  