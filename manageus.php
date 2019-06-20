<?php 
	include "header/headerus.php";
 ?>
<div class="container">
<table class="table table-bordered table-striped" id="dangok">
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Full Name</th>
			<th>Date Sign</th>
			<th>Options</th>
		</tr>
	</thead>
	<tbody>
<?php
	require "sqldb.php";
	mysqli_set_charset($conn, 'UTF8');
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die("Cann't query data".mysqli_error($conn));
	}

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
?>
<?php
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "<tr>"."<td>". $row["id"]. "</td>"."<td>" . $row["product_name"]. "</td>". ."</tr>";
	        echo "<tr>";
	        echo "<td>" . $row["username"]. "</td>";
	        echo "<td>" . $row["password"]. "</td>";
	        echo "<td>" . $row["email"]. "</td>";
	        echo "<td>" . $row["fullname"]. "</td>";
	        echo "<td>" . $row["ngaydk"]. "</td>";
	        echo "<td>";
	        	echo '<a href="deleteusS.php?id='.$row["idus"].'"><span class="glyphicon glyphicon-trash"</span></a>';
	        echo "</tr>";
	    }
	
 ?>
 <?php 
 	} else {
	    echo "0 results";
	}

	mysqli_close($conn);
  ?>
 <!-- Ma HTML -->
 	</tbody>
 </table>
 </div>
 <!-- Het Ma HTML -->
 <?php 
 	include "footer/footer.php";
  ?>