<?php 
include('config.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<a href="add.php">Add</a>
 	<?php 
 		$query = mysqli_query($conn, "SELECT * FROM form1");
 	 ?>
 	 <table border="1px">
 	 	<tr>
 	 		<td>Name</td>
			<td>Email</td>
			<td>Date of Birth</td>
			<td>Gender</td>
			<td>Age</td>
			<td>Sports</td>
			<td>Password</td>
			<td>Confirm Password</td>
			<td>Actiion</td>
 	 	</tr>
 	 	<?php 
 	 	while($q = mysqli_fetch_array($query)) {
 	 	 ?>
 	 	 <tr>
 	 	 	<td><?= $q['name']; ?></td>
 	 	 	<td><?= $q['email']; ?></td>
 	 	 	<td><?= $q['dob']; ?></td>
 	 	 	<td><?= $q['gender']; ?></td>
 	 	 	<td><?= $q['age']; ?></td>
 	 	 	<td><?= $q['sports']; ?></td>
 	 	 	<td><?= $q['pass']; ?></td>
 	 	 	<td><?= $q['cpass']; ?></td>
 	 	 </tr>
 	 	 <?php
 	 	}
 	 	?>
 	 </table>
 
 </body>
 </html>