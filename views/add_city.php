<h2>Add a City</h2>
<form class="form-horizontal" action="actions/action_add_city.php" method="post">
<div class="control-group">
<label class="control-label" for="city_name">City Name</label>
<div class="controls">
<?php echo input('city_name','required')?>
</div>
</div>
<div class="control-group">
<label class="control-label" for="city_state">State</label>
<div class="controls">
<?php echo input('city_state','required')?>
</div>
</div>
<div class="control-group">
<label class="control-label" for="city_rank">Rank</label>
<div class="controls">
<?php echo input('city_rank','required')?>
</div>
</div>
<div class="control-group">
<label class="control-label" for="city_pop">Population</label>
<div class="controls">
<?php echo input('city_pop','required')?>
</div>
</div>
<div class="control-group">
<label class="control-label" for="city_area">Area (square miles)</label>
<div class="controls">
<?php echo input('city_area','required')?>
</div>
</div>
<div class="form-actions">
<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i> Add City</button>
<button type="button" class="btn">Cancel</button>
</div>
</form>