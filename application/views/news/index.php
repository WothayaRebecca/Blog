

     <div class="row">
         <div class="col-md-6" ><h2>tjjhjdgggey</h2>
         <p><?php echo "created by" ?></p>
         </div>
         <div class="col-md-6" style="padding-top: 20px">
            <?php foreach ($news as $news_item): ?>
        	<p class="paragraph"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>" class="btn btn-default"><?php echo $news_item['title'];?></a></p>
        	<?php endforeach;?>
        </div>
       
       </div>
		
	 