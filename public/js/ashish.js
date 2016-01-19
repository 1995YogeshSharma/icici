$(document).ready(function()
	{
		console.log("Loaded");
		var username = <?php echo $_POST['username']; ?>;
		var password = <?php echo $_POST['password']; ?>;
		document.getElementById('user').value = username;
		document.getElementById('password').value = password;
	//	document.getElementById('submit').submit();
	});
