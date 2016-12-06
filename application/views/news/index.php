

     <!-- <div class="row">
         <div class="col-md-6" style="height: 300px; border-color: red; " >
         <p>
           <?php
   
           $image_url='/Images/blog.jpg';?>
           

           <img height="300" width="300" src="<?php echo base_url($image_url);?>" >
         </p> -->
         <!-- <p><?php  ?></p>
         </div>
         <div class="col-md-12" style="padding-top: 20px; " > -->
            <?php foreach ($news as $news_item): 
              $date= $news_item['Date_created'];
              $creator_db=$news_item['Created_by'];
              $logged_in=$username;
              $new_date=strtotime($date);              
              $display_date=date("jS F Y", $new_date);
              
              $display_time=date("H:i:s", $new_date);
            ?> 
             <div class="row" >
              <div class="col-md-12"><div class="panel panel-default" style="border: groove;">
        	    <div class="panel-heading" style="color: black;"><a style=" text-align: right;" onmouseover="return hover_link();" href="<?php echo site_url('news/'.$news_item['slug']); ?>" ><?php echo $news_item['title'];?></a></div>
              <div class="panel-body"><b> Created on <?php echo $display_date;?> by <?php echo $news_item['Created_by'];?> at <?php echo $display_time; ?></b><br><br>
                 <!-- <div class="text-bottom">   -->
                 <a style="float: left;" href= "<?php echo site_url('news/view/'.$news_item['slug']); ?>"> View post </a> 
                 <!-- <div class="text-left"> -->
               <?php
                if($logged_in===$creator_db)
                {?>
              
                  <!-- <button type="button" style="float: right;" class="btn btn-info"> --> <a style="float: right;" href= "<?php echo site_url('news/edit/'.$news_item['slug']); ?>"> Edit post </a><!--  </div></div>  -->
                 
               <?php
               }
               ?>
              </p>
              </div> 
              </div>
              
              </div>
              </div>
        	  <?php endforeach;?>

         </div>
       
       </div>
       <div>
       <div class="text-center">
         <ul class="pagination">
        

          <?php foreach ($links as $link) {
            echo"<li>" .$link. "</li>";

          }
          
            
          ?> 
          </ul>
          </div>
        
           
         </div>

       
  

		
	 