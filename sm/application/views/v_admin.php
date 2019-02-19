<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('C_login/logout'); ?>">Logout</a>
</body>
</html>