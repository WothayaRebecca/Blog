

     <div class="row">
         <div class="col-md-6" style="height: 300px; border-color: red;" >
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
              $new_date=strtotime($date);              
              $display_date=date("jS F Y", $new_date);
              
              $display_time=date("H:i:s", $new_date);?>
              
        	    <p class="paragraph" style="color: black;"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>" ><?php echo $news_item['title'];?></a><b> Created on <?php echo $display_date;?> by <?php echo $news_item['Created_by'];?> at <?php echo $display_time; ?></b></p>
        	  <?php endforeach;?>

         </div>
       
       </div>
       <div class="row">
         <div class="col-md-12">
           <?php echo $this->pagination->create_links();?>
         </div>
       </div>
  

		
	 