<?php 
	include "header/headercreate.php";
 ?>
 <?php 
require "sqldb.php";
mysqli_set_charset($conn, 'UTF8');
if(isset($_POST["code"])){
	$code = $_POST["code"];
	$name = $_POST["name"];
	$category = $_POST["category"];
	$description = $_POST["description"];
	$img = $_POST["image"];
	$pric = $_POST["price"];

	$sql = "INSERT INTO products(product_name, product_code, idcat, description, image, price) VALUES('".$name."','".$code."','".$category."','".$description."','".$img."','".$pric."')";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location: admin.php");
		die();
	}else{
		echo '<h2>Can not add product with error: '.mysqli_error($conn).'</h2>';
	}
}else{
	// echo 'No product code';
}

if( isset($_GET["id"])){
	$id = $_GET["id"];
	$sql = "SELECT * from products WHERE id = ".$id;
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die( "Can't query data".mysqli_error($conn) );
	}

	if (mysqli_num_rows($result) > 0) {
		if($row = mysqli_fetch_assoc($result)){

		}
	}
} 
 ?>
 <div class="container">
	<h3 style="text-align: center; text-transform: uppercase;">Thêm sản phẩm</h3>
	<div class="form-container" style="max-width: 400px;margin: 40px auto;">
		<form action="createproduct.php" method="POST">
			<!-- Tên sản phẩm -->
			<div class="form-group">
				<label for="">Product Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<!-- Mã sản phẩm -->
			<div class="form-group">
				<label for="">Product Code</label>
				<input type="text" name="code" id="code" class="form-control">
			</div>
			<!-- Loại sản phẩm -->
			<div class="form-group">
				<label for="">Category</label>
				<input type="text" name="category" id="category" class="form-control">
			</div>
			<!-- Mô tả -->
			<div class="form-group">
				<label for="">Description</label>
				<textarea name="description" id="description" class="form-control" rows="5">
				</textarea>
			</div>
			<!-- Hinh anh -->
			<div class="form-group">
				<label for="">Image</label>
				<input type="text" name="image" id="image" class="form-control">
			</div>
			<!-- Giá -->
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" name="price" id="price" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success" id="add-btn" style="width: 100%;">Add</button>
			</div>

		</form>
	</div>
</div>
<?php 
	include "footer/footer.php";
 ?>