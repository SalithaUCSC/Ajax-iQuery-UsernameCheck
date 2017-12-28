<!DOCTYPE html>
<html>
<head>
	<title>Tutorial</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Roboto', sans-serif;
		}
		label {
			font-size: 16px;
		}
		#heading {
			margin-top: 50px; 
			margin-bottom: 50px;
			text-align: center;
		}
	</style>
</head>
<body>

<div class="col-lg-12">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<br>
		<h2 id="heading"><?php echo $title; ?></h2>
		<br>
		<label for="username">Enter Username</label>
		<input type="text" name="username" id="username" class="form-control">
		<br>
		<span id="username_result"></span>
		<br><br>		
		<label for="password">Enter Password</label>
		<input type="text" name="password" id="password" class="form-control">		
	</div>
	<div class="col-lg-3"></div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#username').change(function(){
			var username = $('#username').val();
			if(username != ''){
				$.ajax({
					url: "<?php echo base_url(); ?>Search/checkUsername",
					method: "POST",
					data: {username:username},
					success: function(data){
						$('#username_result').html(data);
					}
				});
			}
		});
	});
</script>
</body>
</html>