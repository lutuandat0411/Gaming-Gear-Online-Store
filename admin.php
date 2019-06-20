<?php 
	include "header/headeradmin.php";
 ?>
 <!-- Ma HTML -->
<div class="container">
<a href="createproduct.php" class="btn btn-success  pull-right" style="
    margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add</a>
<form></form>
<table class="table table-bordered table-striped" id="dangok">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Code</th>
			<th>ID Category</th>
			<th>Description</th>
			<th>Image</th>
			<th>Price</th>
			<th>Options</th>
		</tr>
	</thead>
	<tbody>
<?php
	require "sqldb.php";
	mysqli_set_charset($conn, 'UTF8');
	$sql = "SELECT * FROM products";
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
	        echo "<td>".$row["id"]."</td>";
	        echo "<td>" . $row["product_name"]. "</td>";
	        echo "<td>" . $row["product_code"]. "</td>";
	        echo "<td>" . $row["idcat"]. "</td>";
	        echo "<td>" . $row["description"]. "</td>";
	        echo "<td>" . $row["image"]. "</td>";
	        echo "<td>" . $row["price"]. "</td>";
	        echo "<td>";
	        	echo '<a href="editproduct.php?id='.$row["id"].'"><span class="glyphicon glyphicon-pencil"</span></a>';
	        	// echo '<a href="updateproduct.php?id='.$row["id"].'"><span class="glyphicon glyphicon-pencil"</span></a>';
	        	echo '<a href="deleteproduct.php?id='.$row["id"].'"><span class="glyphicon glyphicon-trash"</span></a>';
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
 	include "footer/footeradmin.php";
  ?>