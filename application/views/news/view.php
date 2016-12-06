

   <?php
    $date= $news_item['Date_created'];
    $new_date=strtotime($date);              
    $display_date=date("jS F Y", $new_date);
              
    $display_time=date("H:i:s", $new_date);
   ?>

<!--echo '<h2>' .$news_item['title']. '<h2/>';?>-->
</h2>
<div class="panel panel-default">
<div class="panel-body">
<p class="paragraph" style="margin-left: 0px;">
    <?php
      echo $news_item['text'];
    ?>
</p>
</div>

<div class="panel-footer">
 <p style="color: SteelBlue; float: left;">Created on <?php echo $display_date;?> by <?php echo $news_item['Created_by'];?> at <?php echo $display_time; ?></p>
<!-- <div class="next linkslide" style="margin-left: 1000px"> --> <a style="float: right;" href="<?php echo site_url('news/index'); ?>">Go back to the list </a>
</div>
<!-- <p><</p> -->



