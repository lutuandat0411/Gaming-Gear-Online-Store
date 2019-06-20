<?php 
	include "header/headernew.php";
 ?>
 <hr>
<div class="container">
	<div class="row">
		<h3 style="text-align: left; padding-left: 10px; background: #F88C00; color: white; font-size: 18px; margin-bottom: 0px; position: relative; z-index: 999; border-radius: 4px;">Tin tức</h3>
		<div class="newshow">
			<?php 
				require "sqldb.php";
				$sql = "SELECT * FROM new";
				// Create connection
				$conn = mysqli_connect($servername, $username, $password,$database);
				mysqli_set_charset($conn, 'UTF8');
				// Check connection
				if (!$conn) {
					 die("Connection failed: " . mysqli_connect_error());
				}
				$result = mysqli_query($conn, $sql);
				if(!$result){
					die("Cann't query data".mysqli_error($conn));
				}
				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					$col=0; $ncol =4; 
					while($row = mysqli_fetch_assoc($result)) {
						if( $col% $ncol == 0){
							echo '<div class="row fix">'."\n";
						}
						echo '<div class="col-md-6 news" style="margin-top: 10px">';
							echo '<a class="newins" href="newdetail.php?id='.$row["idnew"].'">';
								echo '<div class="thumbnail newimg">';
									echo '<div class="date">';
										echo '<i style="color: #171717;">'.$row["date"].'</i>';
									echo '</div>';
										echo '<i class="lead" style="color: #000000;">'.$row["title"].'</i>';
										echo '<img class="img-responsive thumbnail" style="width: 200px;" src="'.$row["imgnew"].'">';
										echo '<span style="font-size: 14px; color: #171717;">'.$row["descript"].'</span>';
								echo '</div>';
							echo '</a>';
						echo '</div>';
						$col++;
						if( $col % $ncol == 0){
							echo '</div>'."\n"; 
						// end div row
						}		
					}
					if( $col % $ncol != 0){
						echo '</div>'."\n"; 
					// add one more div as the number product is odd
					}
				} else {
					echo "0 results";
				}
				mysqli_close($conn);
					
			 ?>
		</div>
	</div>
</div>
<?php 
	include "footer/footer.php";
 ?>