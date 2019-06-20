<?php 
	include "header/headernew.php";
 ?>
 <?php 
	if(isset($_GET['id'])){
		$newid = $_GET['id'];
	}else{
		die("there is no product ID");
	}
?>
<hr>
<div class="container">
	<div class="row">
		<h3 style="text-align: left; padding-left: 10px; background: #F88C00; color: white; font-size: 18px; margin-bottom: 0px; position: relative; z-index: 999; border-radius: 4px;">Tin tức</h3>
		<?php
			require "sqldb.php";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password,$database);
			mysqli_set_charset($conn, 'UTF8');
			// Check connection
			if (!$conn) {
				 die("Connection failed: " . mysqli_connect_error());
			}
			//Sql query
			$sql = "SELECT * FROM new Where  idnew=".$newid;
			$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) {
					echo '<div class="container">';
						echo '<h2>'.$row["title"].'</h2>';
						echo '<div class="cont">';
							echo '<img style="width: 500px;" src="'.$row["imgnew"].'">';
							echo '<p>'.$row["content"].'</p>';
							echo '<p>Một vài hình ảnh chi tiết khác</p>';
							echo '<img style="width: 500px;" src="'.$row["imgmore1"].'">';
							echo '<img style="width: 500px;" src="'.$row["imgmore2"].'">';
							echo '<h4>Nguồn: </h4>';
							echo '<h3>'.$row["author"].'</h3>';
						echo '</div>';
					echo '</div>';
				}
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
			 	} else {
				    echo "0 results";
				}

				mysqli_close($conn);
			  ?>
	</div>
</div>

 <?php 
	include "footer/footer.php";
 ?>