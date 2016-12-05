
<h2 class="paragraph">
   <!-- <?php
     echo $news_item['title'];
   ?> -->

<!--echo '<h2>' .$news_item['title']. '<h2/>';?>-->
</h2>
<p class="paragraph" style="margin-left: 0px;">
    <?php
      echo $news_item['text'];
    ?>
</p>
<p class="paragraph" style="color: SteelBlue"><b>created on <?php echo $news_item['Date_created'];?> by <?php echo $news_item['Created_by'];?></b></p>
<p><div class="next" style="margin-left: 1000px"> <a href="<?php echo site_url('news/index'); ?>">Go back to the list </a></div></p>



