<?php 
		if(isset($_GET["id"])){
			require "sqldb.php";	
			$id = $_GET["id"];


			$sql = "DELETE FROM products WHERE id = ".$id;
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location: admin.php');
				die();
				// echo "
				// <script type='text/javascript'>
				// function Add(){
				// 	window.location='index.php';
				// }
				// </script>";
			}else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}

			// if (mysqli_num_rows($result) > 0) {
			//     // output data of each row
		}
	 ?>