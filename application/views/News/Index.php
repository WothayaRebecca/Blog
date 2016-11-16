
<?php foreach ($news as $news_item): ?>
     <h3 class="paragraph"><?php echo $news_item['title']; ?></h3>
	 <div class='main'>
	    <!--<?php echo $news_item['text']; ?>-->
	 </div>
        <p class="paragraph"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>" class="btn btn-info" >View article</a></p>
		<?php endforeach;?>
	 