<?php
session_start();
?>
<pre><?php //print_r($_POST);?></pre>

<?php

// Validate that each piece of info was provided
if( $_POST['city_name'] != '' &&
	$_POST['city_state'] != '' &&
	$_POST['city_rank'] != '' &&
	$_POST['city_pop'] != '' &&
	$_POST['city_area'] != '') {
	
// Read file into array
$lines = file('../data/cities.csv', FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['city_name']}/{$_POST['city_state']}/{$_POST['city_rank']}/{$_POST['city_pop']}/{$_POST['city_area']}";

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/cities.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'The city has been edited.',
		'type' => 'info'
);

header('Location:../?p=list_cities');
} else {
	// Store submitted data into session data
	$_SESSION['POST'] = $_POST;
	
	// Store error message in session data
	$_SESSION['message'] = array(
			'text' => 'Please enter all required information.',
			'type' => 'error'
	);
	
	// Redirect to the form
	header("Location:../?p=form_edit_city&city={$_POST['linenum']}");
}

?>
