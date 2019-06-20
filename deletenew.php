<?php 
		if(isset($_GET["id"])){
			require "sqldb.php";	
			$idn = $_GET["id"];

			$sql = "DELETE FROM new WHERE idnew = ".$idn;
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location: managenew.php');
				die();
			}else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}
		}
 ?>