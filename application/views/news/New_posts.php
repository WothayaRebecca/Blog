<h2 class="paragraph">
<?php
echo $news_item['title'];?>
</h2>
<p class="paragraph">
<?php
echo $news_item['text'];
?>

<p class="paragraph">
<?php
if ($news_item['status']==0)
	{?>
<a href="<?php echo site_url('news/publish/'.$news_item['slug']); ?>" class="btn btn-info" >Publish Article</a>
<?php
}
else
{?>

<a href="<?php echo site_url('news/Unpublish/'.$news_item['slug']); ?>" class="btn btn-info" >Unpublish Article</a>
<?php
}?>
</p>
<p><div class="next" style="margin-left: 1000px"> <a href="<?php echo site_url('news/index'); ?>">Go back to the list </a></div></p>

