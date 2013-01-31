<?php session_start() ?>

<pre><?php print_r($_POST) ?></pre>

<?php
// Validate that each piece of info was provided
if( $_POST['city_name'] != '' &&
	$_POST['city_state'] != '' &&
	$_POST['city_rank'] != '' &&
	$_POST['city_pop'] != '' &&
	$_POST['city_area'] != '') {
	
	// Add this city to the CSV file
	// 	(1) Open the file for writing
	$f = fopen('../data/cities.csv','a');
	// 	(2) Write the new city's info to the file
	fwrite($f,"\n{$_POST['city_name']},{$_POST['city_state']},{$_POST['city_rank']},{$_POST['city_pop']},{$_POST['city_area']}");
	// 	(3) Close the file
	fclose($f);
	
	$_SESSION['message'] = array(
			'text' => 'The city has been added.',
			'type' => 'success'
	);
	
	//Redirect to list of cities
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
	header('Location:../?p=add_city');
}