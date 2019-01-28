<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#submit').click(function(){
				var s = $('#submit').val();
				var n1 = $('#name').val();
				var e1 = $('#mail').val();
				var d1 = $('#dob').val();
				var g1 = $("input[name='gender']:checked").val();
				var a1 = $('#age').val();
				var s1 = [];
				$.each($("input[name='sports']:checked"),function() {
					s1.push($(this).val());
				});
				//var s1 = $('#sports').val();
				var p1 = $('#pass1').val();
				var p2 = $('#pass2').val();
				console.log("Starting ajax");
				$.ajax({
					url: "./records.php",
					type: "post",
					data: {
						submit:s,
						name:n1,
						email:e1,
						dob:d1,
						gender:g1,
						age:a1,
						sports:s1,
						pass:p1,
						cpass:p2
					},
					success:function(data) {
						alert("done");
					}
				});
			});
		});
	</script>

</head>
<body>
	<a href="index.php">View</a>
	<form>
		<table border="1px">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="mail" id="mail"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="date" name="dob" id="dob"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>Male<input type="radio" name="gender" id="gender" class="gender" value="male">Female<input type="radio" name="gender" id="gender1" class="gender" value="female"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td>
					<select name="age" id="age">
						<option value="">Select age</option>
						<?php 
							for($i=1;$i<=100;$i++) {
						?>
						<option><?php echo $i; ?></option>
						<?php
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Sports</td>
				<td>
					<input type="checkbox" name="sports" id="sports" class="sports" value="chess">chess
					<input type="checkbox" name="sports" id="sports1" class="sports" value="cricket">cricket
					<input type="checkbox" name="sports" id="sports2" class="sports" value="football">football
					<input type="checkbox" name="sports" id="sports3" class="sports" value="basketball">basketball
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass1" id="pass1"></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="pass2" id="pass2"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="button" name="submit" id="submit">Submit</button></td>
			</tr>
		</table>
	</form>

</body>
</html>