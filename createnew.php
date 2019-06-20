<?php 
	include "header/headermnnew.php";
 ?>
<div class="container">
	<h3 style="text-align: center; text-transform: uppercase;">Thêm mới tin tức</h3>
	<div class="form-container" style="max-width: 400px;margin: 40px auto;">
		<form action="createnew.php" method="POST">

			<!-- TIeu de -->
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" name="title" id="title" class="form-control">
			</div>
			<!-- Noi Dung -->
			<div class="form-group">
				<label for="">Content</label>
				<textarea name="content" id="content" class="form-control" rows="5">
				</textarea>
			</div>
			<!-- Mo ta  -->
			<div class="form-group">
				<label for="">Description</label>
				<textarea name="description" id="description" class="form-control" rows="5">
				</textarea>
			</div>
			<!-- Anh chinh -->
			<div class="form-group">
				<label for="">Image Main</label>
				<input type="text" name="imgmain" id="imgmain" class="form-control">
			</div>
			<!-- Anh mo rong -->
			<div class="form-group">
				<label for="">Image Extend1</label>
				<input type="text" name="imgextend1" id="imgextend1" class="form-control">
			</div>
			<!-- Anh mo rong -->
			<div class="form-group">
				<label for="">Image Extend2</label>
				<input type="text" name="imgextend2" id="imgextend2" class="form-control">
			</div>
			<!-- Tác giả -->
			<div class="form-group">
				<label for="">Author</label>
				<input type="text" name="author" id="author" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success" id="add-btn" style="width: 100%;">Add</button>
			</div>

		</form>
	</div>
</div>
<?php 
require "sqldb.php";
mysqli_set_charset($conn, 'UTF8');
if(isset($_POST["title"])){
	$title = $_POST["title"];
	$content = $_POST["content"];
	$imgm = $_POST["imgmain"];
	$description = $_POST["description"];
	$imge1 = $_POST["imgextend1"];
	$imge2 = $_POST["imgextend2"];
	$auth = $_POST["author"];

	$sql = "INSERT INTO new(title, content, descript, imgnew, imgmore1, imgmore2, authr) VALUES('".$title."','".$content."','".$description."','".$imgm."','".$imge1."','".$imge2."','".$auth."')";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location: managenew.php");
		die();
	}else{
		echo '<h2>Can not add product with error: '.mysqli_error($conn).'</h2>';
	}
}else{
	// echo 'No product code';
}

if( isset($_GET["idnew"])){
	$id = $_GET["idnew"];
	$sql = "SELECT * from new WHERE idnew = ".$id;
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

 <?php 
 	include "footer/footer.php";
  ?>