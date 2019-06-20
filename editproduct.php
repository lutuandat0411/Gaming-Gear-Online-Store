<?php 
	include "header/headercreate.php";
 ?>
<?php
require "sqldb.php";
mysqli_set_charset($conn, 'UTF8');
if( isset($_GET["id"])){
	$id = $_GET["id"];
	$sql = "SELECT * from products WHERE id = ".$id;
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die( "Can't query data".mysqli_error($conn) );
	}

	if (mysqli_num_rows($result) > 0) {
		if($row = mysqli_fetch_assoc($result)){

 ?>
  <div class="container">
	<div class="form-container">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<!-- Tên sản phẩm -->
			<div class="form-group">
				<label for="">ID Product</label>
				<input type="text" name="id" id="id" class="form-control" value="<?php echo $row["id"] ?>" readonly>
			</div>
			<!-- Tên sản phẩm -->
			<div class="form-group">
				<label for="">Product Name</label>
				<input type="text" name="name" id="name" class="form-control" value="<?php echo $row["product_name"] ?>">
			</div>
			<!-- Mã sản phẩm -->
			<div class="form-group">
				<label for="">Product Code</label>
				<input type="text" name="code" id="code" class="form-control" value="<?php echo $row["product_code"] ?>">
			</div>
			<!-- Loại sản phẩm -->
			<div class="form-group">
				<label for="">Category</label>
				<input type="text" name="category" id="category" class="form-control" value="<?php echo $row["idcat"] ?>">
			</div>
			<!-- Mô tả -->
			<div class="form-group">
				<label for="">Description</label>
				<textarea name="description" id="description" class="form-control" rows="5">
					<?php echo $row["description"] ?>
				</textarea>
			</div>
			<!-- Hình -->
			<div class="form-group">
				<label for="">Image</label>
				<input type="text" name="image" id="image" class="form-control" value="<?php echo $row["image"] ?>">
			</div>
			<!-- Tên sản phẩm -->
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" name="price" id="price" class="form-control" value="<?php echo $row["price"] ?>">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success" id="add-btn">Edit</button>
			</div>
		</form>
	</div>
</div>
<?php 
		}
	}
} 
if(isset($_POST["code"])){
	$id = $_POST["id"];
	$code = $_POST["code"];
	$name = $_POST["name"];
	$category = $_POST["category"];
	$description = $_POST["description"];
	$img = $_POST["image"];
	$price = $_POST["price"];

	$sql = "UPDATE products  SET product_name='".$name."',product_code='".$code."',idcat='".$category."',description='".$description."',image='".$img."',price='".$price."' WHERE id=".$id;
	$result = mysqli_query($conn, $sql);

	if($result){
		// echo '<h2>Add product successfully</h2>';
		header("location: admin.php");
		die();
	}else{
		echo '<h2>Can not add product with error: '.mysqli_error($conn).'</h2>';
	}
}else{
	// echo 'No product code';
}
 ?>
 <?php 
 	include "footer/footer.php";
  ?>