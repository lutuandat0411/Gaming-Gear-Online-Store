<?php
	include "header/headerdt.php"; 
 ?>
 <?php 
	if(isset($_GET['id'])){
		$product_id = $_GET['id'];
	}else{
		die("there is no product ID");
	}
?>
<hr>
<div class="container">
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
			$sql = "SELECT * FROM products Where  id=".$product_id;
			$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) {
					echo '<div class="container">';
						echo '<div class="banner">';
							echo '<span class="nd">Bạn đang xem: '.$row["product_name"].'</span>';
						echo '</div>';
						echo '<div class="cont">';
							echo '<div class="col-md-6">';
									echo '<img class="imgdetail" src="'.$row["image"].'">';
							echo '</div>';
							echo '<div class="col-md-6">';
									echo '<h2>'.$row["product_name"].'</h2>';
									echo '<h4>Tình Trạng: Mới 100% </h4>';
									echo '<h4>Mã series: '.$row["product_code"].'</h4>';
									echo '<div class="product-price"><p class="lead"> Giá: '.$row["price"].'đ</p></div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
					echo '<div class="container">';
						echo '<div class="descript"><h1> Mô tả chi tiết</h1>';
							echo '<div><p class="lead">'.$row["description"].'</p></div>';
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
 <?php 
 	include "footer/footer.php";
  ?>