<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6648d6ecb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/mainstyle.css">
    <title>Ivy-Project</title>
</head>
<body>
<secsion class="top">
        <div class="container">
            <div class="row">
                <div class="top-logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="top-menu-items">
                    <ul>
                        <li><a href="">Đây là website bán chuyên - Mọi thông tin vui lòng liên hệ: 0799982374 </a>
                            
                        </li>
                    </ul>
                </div>
                <div class="top-menu-icons">
                    <ul>
                        <li> 
                            <input  type="text" placeholder=" Tìm kiếm">
                            <i class="fas fa-search"> </i>
                        </li>
                        <li> 
                            <a class="fa fa-user-secret"> </a>
                        </li>
                        <li> 
                            <a href="./cart.php" class="fa fa-shopping-cart"></a>
                        </li>
                        <li>
                            <a href="./user/register.html"> ĐĂNG KÝ </a> <br></br> 
                        </li>
                        <br></br>
                        <li>
                            <a href="./user/login.html"> ĐĂNG NHẬP </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </secsion>
<!-------------------------------------------------Payment--------------------------------------------->
    <section class="payment">
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-cart payment-top-item">
                    <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div  class="payment-top-adress payment-top-item">
                        <i class="fas fa-map-marker-alt "></i>
                    </div>
                    <div  class="payment-top-payment payment-top-item">
                        <i class="fas fa-money-check-alt "></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                    <div class="payment-content-left-method-delivery">
                        <p  style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-delivery-item">
                            <input type="radio"> 
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div><br>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p  style="font-weight:bold;">Phương thức thanh toán</p><br>
                        <p> Mọi giao dịch đều được mã hóa. Thông tin thẻ tín dụng sẽ không báo giờ được lưu lại.</p><br><br>

                        <div class="payment-content-left-method-payment-item">
                            <input check name="method-payment" type="radio"> 
                            <label for="">Thanh toán thẻ tín dụng(OnePay)</label>
                        </div><br>

                        <div class="payment-content-left-method-payment-item-img">
                            <img src="./images/visa.png" alt="">
                        </div><br><br>

                        <div class="payment-content-left-method-payment-item">
                            <input  name="method-payment" type="radio"> 
                            <label for="">Thanh toán thẻ ATM(OnePay)</label>
                        </div><br>

                        <div class="payment-content-left-method-payment-item-img">
                            <img src="./images/visa.png" alt="">
                        </div><br><br>

                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio"> 
                            <label for="">Thanh toán Momo</label>
                        </div><br>

                        <div class="payment-content-left-method-payment-item-img">
                            <img src="./images/visa.png" alt="">
                        </div><br><br>

                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio"> 
                            <label for="">Thanh toán khi nhận hàng</label>
                        </div>
                        <br>
                        </br>
                        <a style="font-size:12px;" href="cart.php"><p >Quay lại giỏ hàng</p></a>
                    </div>
                </div>
                <div class="payment-content-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Số kượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                            <td>Áo Sweater Acmé de la vie - ACME DE LA VIE X Smiley® BIKER SMILEY FRONT ARTWORK KNIT BEIGE</td>
                            <td>-30%</td>
                            <td>1</td>
                            <td><p>1.200.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>Áo Sweater Acmé de la vie - ACME DE LA VIE X Smiley® BIKER SMILEY FRONT ARTWORK KNIT BEIGE</td>
                            <td>-30%</td>
                            <td>1</td>
                            <td><p>1.200.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight: bold;"><p>2.400.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tạm tính</td>
                            <td style="font-weight: bold;"><p>40.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Giao hàng chuyển phát nhanh </td>
                            <td style="font-weight: bold;"><p>40.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tiền thanh toán</td>
                            <td style="font-weight: bold;"><p>2.440.000<sup>đ</sup></p></td>
                        </tr>
                    </table>

                    <div class="payment-content-right-payment">
                        <button>Tiếp tục thanh toán</button>
                    </div>
                    
                </div>
            </div>
            
        </div>

    </section>


<!-----------------------------------------------footer--------------------------------------------->
    <section class="footer">
        <div class="footer-container">
            <p>Tải ứng dụng</p>
            <div class="app-google">
                <a href=""><img src="images/apple.jpg" alt=""></a>
                <a href=""><img src="images/chplay.png" alt=""></a>
            </div>
            <p>Nhận bản tin</p>
            <div class="input-email">
                <input type="text" placeholder="Nhập email của bạn...">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="footer-items">
                <li><a href=""><img src="images/BoCongThuong.png" alt=""></a></li>
                <li><a href=""><img src="" alt=""></a>Liên hệ</li>
                <li><a href=""><img src="" alt=""></a>Tuyển dụng</li>
                <li><a href=""><img src="" alt=""></a>Giới thiệu</li>
                <li>
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-youtube"></a>
                </li>
            </div>
            <div class="footer-text">
                <p>
                    Công ty TNHH MTV Ivy với số đăng ký kinh doanh: 121212121212 <br>
                Địa chỉ đăng ký: 978 Trần Hưng Đạo, Phường 7, Quận 5, TP.Hồ Chí Minh, Việt Nam <br>
                Hotline : <b>079 998 2374</b> 
                </p>
            </div>
            <div class="footer-bottom">
                @Ivy ALL right reserved
            </div>
        </div>
    </section>
    <script src="js/slider.js"></script>
    <script src="js/script.js"></script>



</body>
</html>