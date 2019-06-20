
<?php 
	include "header/headerdt.php";
 ?>
<?php

	$sErr= "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if( isset( $_POST["login"]) ) {
	    $_user = $_POST['nA'];
	    $_pass = $_POST['nB'];
	    // kiểm tra user
	require 'sqldb.php';
	$sql = "SELECT * from user";
	$result = mysqli_query($conn, $sql);
	if(!$result){
	  die( "Can't query data".mysqli_error($conn) );
	}

	if (mysqli_num_rows($result) > 0) {

	    while($row = mysqli_fetch_assoc($result)) {
	      $user = $row["username"];
	      $pass = $row["password"];
	      $fname = $row["fullname"];
	      if( $_user == $user && $_pass == $pass ){
	        $_SESSION["login_status"] = "ready";
	        $_SESSION["name"] = $fname;
	        header("Location: index.php");
	    }else{
	        $sErr= "Username hoặc Password bị sai hoặc chưa tồn tại.";
	    }    
	      }
	} 
	$sql2 = "SELECT * from admin";
	$result2 = mysqli_query($conn, $sql2);
	if(!$result2){
	  die( "Can't query data".mysqli_error($conn) );
	}

	if (mysqli_num_rows($result2) > 0) {

	    while($row2 = mysqli_fetch_assoc($result2)) {
	      $name = $row2["name"];
	      $passadmin = $row2["password"];
	     
	      if( $_user == $name && $_pass == $passadmin ){
	      	$_SESSION["admin"] = "ready";
	        $_SESSION["login_status"] = "ready";
	        $_SESSION["name"] = 'Admin';
	         header("Location:admin.php");
	    }else{
	        $sErr= "Username hoặc Password bị sai hoặc chưa tồn tại.";
	    }    
	      }
	} 
	mysqli_close($conn);
	//end kiem tra
	//end kiem tra
	    
	  
	   
	  }
	}
?>
 <?php
    if( $sErr != ""){
      echo '<script language="javascript">';
      echo 'alert("'.$sErr.'")';
      echo '</script>';
    }   
?>
<hr>
<div class="container">
	<div class="signup-container">
		<h3 style="text-align: center;padding-bottom: 10px;">Đăng Nhập</h3>
			<form class="form" id="signup" data-toggle="validator" action="signin.php" method="post">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control"  placeholder="username" name="nA" required>	
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" placeholder="password" name="nB" required>
					</div>
				</div>
				<button type="submit" value="login" name="login">Đăng nhập</button>
	      		<p class="message">Not registered? <a href="signup.php">Create an account</a></p>
			</form>
		</div>
	</div>
<?php 
	include "footer/footersi.php";
 ?>