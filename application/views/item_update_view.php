<div class="fixed-nav sticky-footer bg-dark" id="page-top">
<div class="content-wrapper">
<div class="card mb-3">
	<?php echo form_open("item/item_update/$item->id");?>
	<?php echo form_fieldset('<div class="card-header"><h1>Update Item</h1></div>');	?>
	<input type="hidden" name="current_name" value="<?php echo $item->name ?>">
	<input type="hidden" name="current_category" value="<?php echo $item->category ?>" >
	<input type="hidden" name="current_description" value="<?php echo $item->description ?>">
	<input type="hidden" name="current_price" value="<?php echo $item->price ?>">
	<div class="form-group">
		<label>&emsp;Item Name:</label>
		<input type="text" name="update_name" placeholder="Item Name" class="form-control" value="<?php echo $item->name; ?>">
	</div>
	<div class="form-group">
		<label>&emsp;Category:</label>
		<select class="form-control" name="update_category">
		<?php
		foreach ($category as $cat) {
				?>
				<option value="<?php echo $cat->category; ?>" <?php if($cat->category == $item->category) {echo "selected = 'selected'";} ?>><?php echo $cat->category; ?>
				</option>
				<?php
		}
		?>
		</select>
	</div>
	<div class="form-group">
		<label>&emsp;Price:</label>
		<input type="text" name="update_price" placeholder="Item Name" class="form-control" value="<?php echo $item->price; ?>">
	</div>
	<div class="form-group">
		<label>&emsp;Description:</label>
		<textarea name="update_description" class="form-control" rows="5"><?php echo $item->description ?></textarea>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
	</div>
	<?php echo form_close();?>
</div>
</div>
</div>