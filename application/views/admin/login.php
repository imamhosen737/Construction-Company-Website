<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
<form action="<?php echo base_url('index.php/Admin/login') ?>" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <input type="submit" class="btn btn-block btn-success" value="Login">
  <span style="color: red"><?php echo $this->session->flashdata('msg'); ?></span>
</form>
</div>
</body>
</html>