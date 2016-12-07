
<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> <?php
echo '<h2> Welcome- '.$username.' </h2>';
echo "You can now create a blog here plus you can also view the blogs created by other bloggers.";?>
</div>
<?php

      $url = site_url('/pages/logout');
 ?>
<br>
 <label><a href=<?php echo $url;?>>Logout</a></label>
      
