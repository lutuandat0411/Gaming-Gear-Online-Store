<?php 
		if(isset($_GET["id"])){
			require "sqldb.php";	
			$idus = $_GET["id"];

			$sql = "DELETE FROM user WHERE idus = ".$idus;
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location: manageus.php');
				die();
			}else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}
		}
 ?>