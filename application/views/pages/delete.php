<div class="container">
  <div class="row">
	<div class="col-md-6">
	<tr>
	  <td>
	  	<?php echo form_label('blogger names', 'names');?>
	  </td>
	  <td>
		<?php
		foreach ($name as $name1) 
		{
			# code...
			/*echo "<pre>";
			print_r($name1);
			echo "</pre>";*/
			echo $name1;
			//echo form_dropdown('', $name1,'');
		}
		
		?>		
	  </td>
	</tr>
	</div>
  </div>
	


</div>