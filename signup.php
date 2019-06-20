<?php 
	include "header/headerdt.php";
 ?>
 <hr>
 <div class="container">
	<div class="signup-container">
		<h3 style="text-align: center;padding-bottom: 10px;">Đăng ký tài khoản</h3>
			<form class="form" id="signup" data-toggle="validator" action="signup.php" method="post">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control"  placeholder="Họ và Tên" name="fullname" required>	
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-envelope"></span>
						</span>
						<input type="text" class="form-control"  placeholder="Email" name="email" required>	
					</div>
				</div>
				<div class="form-group" id="email-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control"  placeholder="Username" name="username" required > 
						<span class="glyphicon glyphicon-remove form-control-feedback hidden" id="email-error">
						</span>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required >
					</div>
				</div>
				<input class="btn btn-large btn-success" type="submit" value="Đăng ký" name="register"/>
			</form>
		</div>
	</div>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if( isset( $_POST["register"]) ) {
	    $_username = $_POST['username'];
	    $_password = $_POST['password'];
	    $_fname = $_POST['fullname'];
	    $_email = $_POST['email'];
		echo '<script language="javascript">';
	      echo 'alert("Đăng ký thành công")';
	      echo '</script>';
	    }
	}
?>
<?php
	require 'sqldb.php';
	if (isset($_POST["username"]) && isset($_POST["password"])) {
		$name = $_username;
		$pass = $_password;
		$fname = $_fname;
		$email = $_email;
		$sql = "INSERT INTO user(username, password, email, fullname) VALUES('".$name."','".$pass."','".$email."','".$fname."')";
		$result = mysqli_query($conn,$sql); 
	}
?>
<?php 
	include "footer/footer.php";
 ?>