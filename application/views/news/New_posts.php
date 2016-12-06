
<div class="panel panel-default">
<div class="panel-body">
<?php
echo $news_item['text'];
?>

<div class="text-left">
<?php
if ($news_item['status']==0)
	{?>
<br>
<a href="<?php echo site_url('news/publish/'.$news_item['slug']); ?>" class="btn btn-info" >Publish Article</a>
<?php
}
else
{?>
<br>
<a style="padding-top: 10px; padding-left: 10px;" href="<?php echo site_url('news/Unpublish/'.$news_item['slug']); ?>" class="btn btn-info" >Unpublish Article</a>
<?php
}?>
</div>
</div>
<div class="text-right">
<div class="panel-footer" > <a href="<?php echo site_url('news/index'); ?>">Go back to the list </a></div>
</div>
</div>

