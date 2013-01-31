<?php
$lines = file('data/cities.csv',FILE_IGNORE_NEW_LINES);

// Get the city association with the 'city' parameter in the query string
$city = explode(',',$lines[$_GET['city']]);
?>

<h2>Edit City</h2>
<form class="form-horizontal" action="actions/edit_city.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['city'] ?>" />
	<div class="control-group">
		<label class="control-label" for="city_name">City Name</label>
		<div class="controls">
			<?php echo input('city_name','required',$city[0]) ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="city_state">State</label>
		<div class="controls">
			<?php echo input('city_state','required',$city[1])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="city_rank">Rank</label>
		<div class="controls">
			<?php echo input('city_rank','required',$city[2])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="city_pop">Population</label>
		<div class="controls">
			<?php echo input('city_pop','required',$city[3])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="city_area">Area (square miles)</label>
		<div class="controls">
			<?php echo input('city_area','required',$city[4])?>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-warning"><i class="icon-edit icon-white"></i> Edit City</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>