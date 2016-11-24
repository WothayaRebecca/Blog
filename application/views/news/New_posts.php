<h2 class="paragraph">
<?php
echo $news_item['title'];?>
<!--echo '<h2>' .$news_item['title']. '<h2/>';?>-->
</h2>
<p class="paragraph">
<?php
echo $news_item['text'];
?>
<p class="paragraph"><a href="<?php echo site_url('news/publish/'.$news_item['slug']); ?>" class="btn btn-info" >Publish Article</a>
<a href="<?php echo site_url('news/Unpublish/'.$news_item['slug']); ?>" class="btn btn-info" >Unpublish Article</a>
</p>
