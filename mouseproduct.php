<?php 
	include "header/header.php";
 ?>
 <hr>
 <div class="container">
 	<div class="col-md-8">
 		 <div class="slideshow-container">
        	<div id="slideshow">
	            <div id="carousel-slideshow" class="carousel slide c-fade" data-ride="carousel" data-interval="3000">
	                <!-- Indicators -->
	                <ol class="carousel-indicators">
	                    <li data-target="#carousel-slideshow" data-slide-to="0" class="active" ></li>
	                    <li data-target="#carousel-slideshow" data-slide-to="1"  ></li>
	                    <li data-target="#carousel-slideshow" data-slide-to="2"  ></li>
	                    <li data-target="#carousel-slideshow" data-slide-to="3"  ></li>
	                </ol>
	                <!-- Wrapper for slides -->
	                <div class="carousel-inner">
	                    <div class="item active ">
	                        <img src="//hstatic.net/716/1000026716/1000149002/slideshow_1.png?v=218" alt=""/>
	                    </div>
	                    <div class="item ">
	                        <img src="//hstatic.net/716/1000026716/1000149002/slideshow_2.png?v=218" alt=""/>
	                    </div>
	                    <div class="item ">
	                        <img src="//hstatic.net/716/1000026716/1000149002/slideshow_3.png?v=218" alt=""/>
	                    </div>
	                    <div class="item ">
	                        <img src="//hstatic.net/716/1000026716/1000149002/slideshow_4.png?v=218" alt=""/>
	                    </div>  
	                </div>
            	</div>
            </div>
         </div>
 	</div>
 	<div class="col-md-4">
 		<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#home">Thông Báo</a></li>
			  <li><a data-toggle="tab" href="#menu1">Khuyến Mãi</a></li>
			  <li><a data-toggle="tab" href="#menu2">Tuyển Dụng</a></li>
			</ul>
			<div class="tab-content">
			  <div id="home" class="tab-pane fade in active">
			    <p>Website sẽ bảo trì từ ngày 4/11 đến ngày 9/11.Mọi thắc mắc hay cần được tư vấn quý khách vui lòng liên hệ trực tiếp qua số điện thoại: </p>
			    <p>Điện thoại cố định: 028 39999999</p>
			    <p>Điện thoại di động: 0948 99999999999</p>
			  </div>
			  <div id="menu1" class="tab-pane fade">
			    <p>Cửa hàng thường xuyên đưa ra những hot deal hàng tháng, quý khách theo dõi thường xuyên để biết thêm thông tin chi tiết</p>
			  </div>
			  <div id="menu2" class="tab-pane fade">
			    <p>Liên hệ tuyển dụng trực tiếp tại cửa hàng.</p>
			  </div>
			</div>
			 	</div>
			 </div>
	<div class="container bodyperfect">
		<div class="col-md-3">
			<h3 class="title-widget-home">Danh mục</h3>
			<div class="sidebar-home-content">
				<nav class="menu-left">
					<ul class="menu menu-danh-muc">
						<li class="has_child menu-item"><a href="kbproduct.php">Keyboard-Bàn Phím</a></li>
						<li class="has_child menu-item" class="active"><a href="#">Mouse-Chuột</a></li>
						<li class="has_child menu-item"><a href="headphoneproduct.php">Headphone-Tai Nghe</a></li>
					</ul>
				</nav>
			</div>
			<div class="rowz">
				<img src="img/ASUS-logo.png">
				<img src="img/GIGA-logo.png">
				<img src="img/INTEL-logo.png">
			</div>
		</div>
		<div class="col-md-9">
			<nav>
				<div class="row">
					<h3 class="heading">Sản phẩm bán chạy</h3>
					<div class="container img-product" border="1">
							<?php
							require "sqldb.php";
								$sql = 'SELECT * FROM products WHERE idcat="2"';
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

										echo '<div class="col-md-6 col-sm-4 col-lg-2 productshow">';
											echo '<a class="producthover" href="productdetail.php?id='.$row["id"].'">';
												echo '<div class="product-img thumbnail">';
													echo  	'<img class="img-responsive" src="'.$row["image"].'">';
												echo '</div>';
												echo '<div class="product-info">';
													echo  	'<h2 class="product-name">'.$row["product_name"].'</h2>';
													echo 	'<div class="product-price"> Giá: '.$row["price"].'</div>';
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
			</nav>
		</div>
	</div>
 <?php 
 	include "footer/footer.php";
  ?>