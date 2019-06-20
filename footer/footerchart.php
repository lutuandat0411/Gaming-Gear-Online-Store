         <section id="footer-menu" class="sections footer-menu">
           <div class="container">
                   <div class="footer-menu-wrapper">
                       <div>
                           <div class="col-md-8">
                               <div class="menu-item">
                                   <h5>Về Tuấn Đạt Store</h5>
                                   <ul>
                                       <li>Địa chỉ: 1600 Đường 3/2, Phường 20, Quận 11,United States of America.</li>
                                       <li>Điện thoại cố định: (028) 999-9999</li>
                                       <li>Hotline: (0948) 36-999999999999</li>
                                       <li>Email: datdeptraisieucapvutru@gmail.com.vn.cn.hk.kr</li>
                                   </ul>
                               </div>
                           </div>
                       <div class="col-md-4">
                           <div class="menu-item">
                               <h5>TuandatStore hân hạnh đồng hành cùng</h5>
                               <div class="rowz">
                                <img src="/img/asuslogo.png" style="width: 50px;">
                                <img src="/img/gigalogo.png" style="width: 50px;">
                                <img src="/img/intellogo.png" style="width: 50px;">
                                <img src="/img/msilogo.png" style="width: 50px;">
                              </div>
                           </div>
                       </div>
                   </div>
           </div>
       </section>
   <!--Footer-->
                <footer id="footer" class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-wrapper">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-brand">
                                        <img src="assets/images/logo3.jpg" alt="logo" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="copyright">
                                        <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
                
                <div class="scrollup">
                    <a href="#"><i class="fa fa-chevron-up"></i></a>
                </div>
                <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
                <script src="assets/js/vendor/bootstrap.min.js"></script>
                <script src="assets/js/plugins.js"></script>
                <script src="assets/js/modernizr.js"></script>
                <script src="assets/js/main.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                      <canvas id="myChart" width="600" height="800"></canvas>
                      <script>
                      $(document).ready(function(){
                        $.ajax({
                          url: 'getchartdata.php',
                          method: 'POST',
                          dataType: 'json',
                          //data
                        }).done(function(data){
                          if(data.result){
                            var categories = [];
                            var numOfProduct = [];
                            $.each(data.products, function(index,row){
                              categories.push(row.category);
                              numOfProduct.push(row.NumOfProduct);
                            })

                              var ctx = document.getElementById("myChart").getContext('2d');
                              var myChart = new Chart(ctx, {
                                  type: 'bar',
                                  data: {
                                      labels: categories,
                                      datasets: [{
                                          label: 'Tổng số sản phẩm',
                                          data: numOfProduct,
                                          backgroundColor: getRandomColorArrays(categories.length),
                                          borderColor: [
                                              'rgba(255,99,132,1)',
                                              'rgba(54, 162, 235, 1)',
                                              'rgba(255, 206, 86, 1)',
                                              'rgba(75, 192, 192, 1)',
                                              'rgba(153, 102, 255, 1)',
                                              'rgba(255, 159, 64, 1)'
                                          ],
                                          borderWidth: 1
                                      }]
                                  },
                                  options: {
                                    plugins: {
                                datalabels: {
                                  backgroundColor: function(context) {
                                    return context.dataset.backgroundColor;
                                  },
                                  borderRadius: 4,
                                  color: 'white',
                                  font: {
                                    weight: 'bold'
                                  },
                                  formatter: Math.round,
                                  anchor: 'end',
                                  align: 'start'
                                }
                              },
                                      scales: {
                                          yAxes: [{
                                              ticks: {
                                                  beginAtZero:true
                                              }
                                          }]
                                      }
                                  }
                              });


                          }else{
                            console.log(data.message);
                          }
                        }).fail(function(jqXHR, statusText, errorThrown){
                          console.log("Fail:"+jqXHR.responseText);
                          console.log(statusText);
                        }).always(function(){

                        })
                      })

                      function getRandomColor() {
                        var letters = '0123456789ABCDEF'.split('');
                        var color = '#';
                        for (var i = 0; i < 6; i++) {
                          color += letters[Math.floor(Math.random() * 16)];
                        }
                        return color;
                      }
                      function getRandomColorArrays(num) {
                       
                        var color = [];
                        for (var i = 0; i < 6; i++) {
                          color.push(getRandomColor());
                        }
                        return color;
                      }

                      </script>
            </body>
        </html>