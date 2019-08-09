<!DOCTYPE html>
<html>
<head>
	<title>Survey System</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url();?>assets/css/bootstrap.min.js"></script> 
</head>
<body>
	<h1 class="text-center">Demo Register</h1>
	<div class="container">
	<div id="connectedUsers">
		<h1 class="text-center">Uers Stats</h1>
		<table class="table table-responsive table-hover">
			<tr>
				<th>Connected Users</th>
				<th>Attempting Users</th>
				<th>Completed Users</th>
			</tr>
			<tr>
				<td id="total"></td>
				<td id="attempting"></td>
				<td id="attempted"></td>
			</tr>
		</table>
	</div>	
	<div id="top"></div>
	<div id="second"></div>
	<div id="third"></div>
	</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		setInterval(function(){
				$('#top').load("<?php echo base_url();?>top")
				$('#second').load("<?php echo base_url();?>second")
				$('#third').load("<?php echo base_url();?>third")
				$('#total').load("<?php echo base_url();?>totalusers")
				$('#attempting').load("<?php echo base_url();?>attempting")
				$('#attempted').load("<?php echo base_url();?>attempted")

	},200);
	});
</script>
</body>
</html>