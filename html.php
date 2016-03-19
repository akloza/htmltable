<?php session_start();
echo session_id(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HTML Table</title>



<style type="text/css">
	th{
		padding: 10px;
		border: 1px solid #000;
		color:grey;
	}
	td{
		padding: 5px;
		border: 1px solid #000;
	}
	table{
		
		border:1pt solid;
		border-collapse:  collapse;
	}

</style>

<body>
	<?php
	
		$users = array( 
			   array("first_name" => "Michael", "last_name" => "Choi"),
			   array("first_name" => "John", "last_name" => "Supsupin"),
			   array("first_name" => "Mark", "last_name" => "Guillen"),
			   array("first_name" => "KB", "last_name" => "Tonel"),
			   array("first_name" => "Tom", "last_name" => "Smith"),
			   array("first_name" => "Bernie", "last_name" => "Stevens"),
			   array("first_name" => "Bobbie", "last_name" => "Stevens"),
			   array("first_name" => "Allison", "last_name" => "Matthews"),
			   array("first_name" => "Jennifer", "last_name" => "Williams"),
			   array("first_name" => "Erin", "last_name" => "Wells"),
			   array("first_name" => "Erica", "last_name" => "DoSantos"),
			   array("first_name" => "Anita", "last_name" => "Vandiver"),
			   array("first_name" => "Andre", "last_name" => "Gasparoni"),
			   array("first_name" => "Sophia", "last_name" => "Benitez")     
			);
		?>
<table> 
	<tr>
		<th>User #</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Full Name</th>
		<th>Full Name in upper case</th>
		<th>Length of full name</th>
		
	</tr>

<?php foreach($users as $key => $value) {
	// var_dump($value);
	$current_key = $key + 1;
	$str = "{$value['first_name']} {$value['last_name']}";
	//this makes a string out of the first and last name
	$full_name_length = strlen(str_replace(" ", "", $str));
	//we take the str and find the length of the str and replace the spaces with no spaces so we count the # of letters w/o spaces
	$full_name_uppercase = strtoupper($str);
	//this makes the str all uppercase
echo "<tr>
		<td>{$current_key}</td>
		<td>{$value['first_name']}</td>
		<td>{$value['last_name']}</td>
		<td>{$value['first_name']} {$value['last_name']}</td>
		<td>{$full_name_uppercase}</td>
		<td>{$full_name_length}</td>";


}


	?>

</table>


	
</body>
</html>
