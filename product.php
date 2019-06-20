<?php
	include "header/headerpd.php";
?>
<div class="container">
	<div class="row fix">
		<?php
		require "sqldb.php";
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn, $sql);
			if(!$result){
				die("Cann't query data".mysqli_error($conn));
			}
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
			echo '<div class="col-sm-6 col-md-6 col-lg-3">';
					echo  	'<img class="img-responsive" src="'.$row["image"].'">';
					echo  	'<h3>'.$row["product_name"].'</h3>';
			echo '</div>';
			}
		} else {
			echo "0 results";
			}
				mysqli_close($conn);
		?>
	</div>
</div>
<?php
	include "footer/footerpd.php";
?>