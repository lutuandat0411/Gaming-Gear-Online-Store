<?php 
	include "header/headermnnew.php";
 ?>
 <!-- Ma HTML -->
<div class="container">
	<div>
		<a href="createnew.php" class="btn btn-success  pull-right" style="
	    margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add</a>
	<form></form>
	<table class="table table-bordered table-striped" id="dangok">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Content</th>
				<th>Description</th>
				<th>ImgMain</th>
				<th>ImgExtend1</th>
				<th>ImgExtend2</th>
				<th>Author</th>
				<th>Date</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
<?php
	require "sqldb.php";
	mysqli_set_charset($conn, 'UTF8');
	$sql = "SELECT * FROM new";
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
		        echo "<td>".$row["idnew"]."</td>";
		        echo "<td>" . $row["title"]. "</td>";
		        echo "<td>" . $row["content"]. "</td>";
		        echo "<td>" . $row["descript"]. "</td>";
		        echo "<td>" . $row["imgnew"]. "</td>";
		        echo "<td>" . $row["imgmore1"]. "</td>";
		        echo "<td>" . $row["imgmore2"]. "</td>";
		        echo "<td>" . $row["authr"]. "</td>";
		        echo "<td>" . $row["date"]. "</td>";
		        echo "<td>";
		        	echo '<a href="editnew.php?id='.$row["idnew"].'"><span class="glyphicon glyphicon-pencil"</span></a>';
		        	// echo '<a href="updateproduct.php?id='.$row["id"].'"><span class="glyphicon glyphicon-pencil"</span></a>';
		        	echo '<a href="deletenew.php?id='.$row["idnew"].'"><span class="glyphicon glyphicon-trash"</span></a>';
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
</div>
 <?php 
 	include "footer/footer.php";
 ?>