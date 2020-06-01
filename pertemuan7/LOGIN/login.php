<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>

<?php 
//cek apakah tomol submit ditekena
if(isset($_POST['submit'])){
	//cek username dan passworld
	if( $_POST['username'] == 'admin' && $_POST['password'] == "12345"){
	//jika benar redirect ke halaman amdin		
		header("Location: admin.php");
		exit;
	}else{
		//jika salah, tampilkan pesan kesalahan
		$error = true;
	}
}
?>
	<h2>Halaman Login</h2>
	<?php if(isset($error)):?>
		<h4 style="color:red;font-style: italic;">Periksa inputan</h4>
	<?php endif;?>
	<br/>
<form action="" method="POST">
	<label for="username">Username :</label>
	<br/>
	<input type="text" name="username" id="username">
	<br/>
	<label for="passworld">Passworld :</label>
	<br/>
	<input type="password" name="password" id="password"> 
	<br/><br/>
	<input type='Submit' name='submit'>
</form>
</body>
</html>