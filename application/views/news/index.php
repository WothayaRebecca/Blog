

     <div class="row">
         <div class="col-md-6" style="height: 300px; border-color: red; " >
         <p>
           <?php
   
           $image_url='/Images/blog.jpg';?>
           

           <img height="300" width="300" src="<?php echo base_url($image_url);?>" >
         </p>
         <p><?php  ?></p>
         </div>
         <div class="col-md-6" style="padding-top: 20px; " >
            <?php foreach ($news as $news_item): 
              $date= $news_item['Date_created'];
              $creator_db=$news_item['Created_by'];
              $logged_in=$username;
              $new_date=strtotime($date);              
              $display_date=date("jS F Y", $new_date);
              
              $display_time=date("H:i:s", $new_date);
            ?> 
             <div class="row" >
              <div class="col-md-6" style="border: groove; width: 600px">
        	    <p class="paragraph" style="color: black;"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>" ><?php echo $news_item['title'];?></a><br><b> Created on <?php echo $display_date;?> by <?php echo $news_item['Created_by'];?> at <?php echo $display_time; ?></b> 
                       
               <?php
                if($logged_in===$creator_db)
                {?>
                  <!-- <button type="button" style="float: right;" class="btn btn-info"> --> <a href= "<?php echo site_url('news/edit/'.$news_item['slug']); ?>"> Edit post </a>
                  </button>
               <?php
               }
               ?>
              </p>
              
              </div>
              </div>
        	  <?php endforeach;?>

         </div>
       
       </div>
       <div>
         <ul class="pagination">
        

          <?php foreach ($links as $link) {
            echo"<li>" .$link. "</li>";

          }
          
            
          ?> 
          </ul>
        
           
         </div>

       
  

		
	 