<h2>Cities</h2>
<table class="table table-striped">
<thead>
<tr>
<th>Name</th>
<th>State</th>
<th>Rank</th>
<th>Population</th>
<th>Area (mi&sup2;)</th>
<th>Edit / Delete</th>
</tr>
</thead>
<tbody>
<?php
// Read all lines of the CSV file into an array
// The "file" function in PHP returns an array of all the lines in the file listed
$lines = file('data/cities.csv',FILE_IGNORE_NEW_LINES);
	
// Counter variable for line number
$i = 0;
	
//Iterate over the array of lines
foreach($lines as $line) {
	$parts = explode('/',$line);
	$name = $parts[0];
	$state = $parts[1];
	$rank = $parts[2];
	$pop = $parts[3];
	$area = $parts[4];
	echo '<tr>';
	echo 	"<td>$name</td>";
	echo 	"<td>$state</td>";
	echo 	"<td>$rank</td>";
	echo 	"<td>$pop</td>";
	echo 	"<td>$area</td>";
	$onclick = "return confirm('Are you sure you want to delete $name?')";
	echo 	"<td><a class=\"btn btn-warning\" href=\"./?p=form_edit_city&city=$i\"><i class=\"icon-edit icon-white\"></i></a> <a class=\"btn btn-danger\" onclick=\"$onclick\" href=\"actions/delete_city.php?linenum=$i\"><i class=\"icon-trash icon-white\"></i></a></td>";
	echo '</tr>';

	$i++; // increment line number
}
	?>
		</tbody>
	</table>