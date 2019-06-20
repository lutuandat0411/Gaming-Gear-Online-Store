<?php 
	include "header/headermnnew.php";
 ?>
<?php
require "sqldb.php";
mysqli_set_charset($conn, 'UTF8');
if( isset($_GET["id"])){
	$id = $_GET["id"];
	$sql = "SELECT * from new WHERE idnew = ".$id;
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
			<!-- ID bao-->
			<div class="form-group">
				<label for="">ID New</label>
				<input type="text" name="idnew" id="idnew" class="form-control" value="<?php echo $row["idnew"] ?>" readonly>
			</div>
			<!-- Tieu de bao -->
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" name="title" id="title" class="form-control" value="<?php echo $row["title"] ?>">
			</div>
			<!-- Noi Dung -->
			<div class="form-group">
				<label for="">Content</label>
				<textarea name="content" id="content" class="form-control" rows="5">
					<?php echo $row["content"] ?>
				</textarea>
			</div>
			<!-- Mô tả -->
			<div class="form-group">
				<label for="">Description</label>
				<textarea name="description" id="description" class="form-control" rows="5">
					<?php echo $row["descript"] ?>
				</textarea>
			</div>
			<!-- Anh chinh -->
			<div class="form-group">
				<label for="">Image Main</label>
				<input type="text" name="imgm" id="imgm" class="form-control" value="<?php echo $row["imgnew"] ?>">
			</div>
			<!-- Hình phu -->
			<div class="form-group">
				<label for="">Image Extend 1</label>
				<input type="text" name="imgex1" id="imgex1" class="form-control" value="<?php echo $row["imgmore1"] ?>">
			</div>
			<!-- Hinh mo rong -->
			<div class="form-group">
				<label for="">Image Extend 2</label>
				<input type="text" name="imgex2" id="imgex2" class="form-control" value="<?php echo $row["imgmore2"] ?>">
			</div>
			<!-- Tac Gia -->
			<div class="form-group">
				<label for="">Author</label>
				<input type="text" name="author" id="author" class="form-control" value="<?php echo $row["authr"] ?>">
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
if(isset($_POST["title"])){
	$id = $_POST["idnew"];
	$title = $_POST["title"];
	$content = $_POST["content"];
	$imgm = $_POST["imgm"];
	$description = $_POST["description"];
	$imgex1 = $_POST["imgex1"];
	$imgex2 = $_POST["imgex2"];
	$author = $_POST["author"];

	$sql = "UPDATE new  SET title='".$title."',content='".$content."',imgnew='".$imgm."',descript='".$description."',imgmore1='".$imgex1."',imgmore2='".$imgex2."',authr='".$author."' WHERE idnew=".$id;
	$result = mysqli_query($conn, $sql);

	if($result){
		// echo '<h2>Add product successfully</h2>';
		header("location: managenew.php");
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