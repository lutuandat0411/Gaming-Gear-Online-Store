<?php 
	include "header/headerct.php";
 ?>
 <div class="container">
  <div class="divcontactus">
               <div class="row" style="margin-bottom: 10px;">
                   <div class="main_contact whitebackground">
                       <div class="contact_content">
                           <div class="col-md-6">
                               <div class="single_left_contact">
                                   <form action="#" id="formid">
                                       <div class="form-group">
                                          <label>First Name: </label>
                                           <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                       </div>
                                       <div class="form-group">
                                          <label>Email: </label>
                                           <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                       </div>
                                       <div class="form-group">
                                          <label>Message: </label>
                                           <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                       </div>
                                       <div class="center-content">
                                           <input type="submit" value="Submit" class="btn btn-default">
                                       </div>
                                   </form>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="single_right_contact">
                                   <div class="contact_address margin-top-40">
                                       <p>Địa chỉ liên hệ:</p>
                                       <span>1600 Đường 3/2, Phường 20, Quận 11,</span>
                                       <span>United States of America.</span> 
                                       <span class="margin-top-20">Điện thoại cố định: (028) 999-9999</span> 
                                       <span>Điện thoại di động: (0948) 36-999999999999</span> 
                                   </div>
                                   <div class="contact_socail_bookmark">
                                       <a href="https://www.facebook.com/TDStore-376692499457246/" target="_blank"><i class="fa fa-facebook"></i></a>
                                       <a href=""><i class="fa fa-twitter"></i></a>
                                       <a href=""><i class="fa fa-google"></i></a>
                                   </div>
       
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
</div>
 <?php 
 	include "footer/footer.php";
  ?>