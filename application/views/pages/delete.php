<div class="container">
  <div class="row">
	<div class="col-md-2">
	<<!-- tr>
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
	</tr> -->
	<p>
  <select multiple class="form-control">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
  <input type="text" class="form-control" id="disabledInput" placeholder="this is disabled...." disabled="">
</p>
	</div>
  </div>
	


</div>