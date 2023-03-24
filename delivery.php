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
                    <a href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="top-menu-items">
                    <ul>
                        <li><a href="">ÁO-QUẦN</a>
                            <ul class="top-menu-item">
                                <li><a href="">Hàng mới về</a></li>
                                <li><a href="">Áo</a>
                                    <ul>
                                        <li><a href="">Áo len</a></li>
                                        <li><a href="">Áo thun</a></li>
                                        <li><a href="">Áo sơmi</a></li>
                                        <li><a href="">Áo khoác</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Quần</a>
                                    <ul>
                                        <li><a href="">Quần jean</a></li>
                                        <li><a href="">Quần lửng</a></li>
                                        <li><a href="">Quần kaki</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">TÚI-BALO</a>
                            <ul class="top-menu-item">
                                <li><a href="">Hàng mới về</a></li>
                                <li>
                                    <a href="">Túi</a>
                                </li>
                                <li>
                                    <a href="">Balo</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">MŨ-NÓN</a>
                            <ul class="top-menu-item">
                                <li><a href="">Hàng mới về</a></li>
                                <li>
                                    <a href="">Mũ</a>
                                </li>
                                <li>
                                    <a href="">Nón</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">GIÀY-DÉP</a>
                            <ul class="top-menu-item">
                                <li><a href="">Hàng mới về</a></li>
                                <li>
                                    <a href="">Giày</a>
                                </li>
                                <li>
                                    <a href="">Dép</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">PHỤ KIỆN</a></li>
                        <li><a href="">TIN TỨC</a></li>
                        <li><a href="">THÔNG TIN</a></li>
                    
                    </ul>
                </div>
                <div class="top-menu-icons">
                    <ul>
                        <li> 
                            <input  type="text" placeholder=" Tìm kiếm">
                            <i class="fas fa-search"> </i>
                        </li>
                        <li> 
                            <a  href="" class="fa fa-user-secret"> </a>
                        </li>
                        <li> 
                            <a class="fa fa-shopping-cart"> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </secsion>
<!-------------------------------------------------Delivery--------------------------------------------->
    <section class="delivery">
        <div class="container">
            <div class="delivery-top-wrap">
                <div class="delivery-top">
                    <div class="delivery-top-cart delivery-top-item">
                    <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="delivery-top-adress delivery-top-item">
                        <i class="fas fa-map-marker-alt "></i>
                    </div>
                    <div class="delivery-top-payment delivery-top-item">
                        <i class="fas fa-money-check-alt "></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="delivery-content row">
                <div class="delivery-content-left">
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <div class="delivery-content-left-dangnhap row">
                        <i class="fas fa-sign-in-alt"></i>
                        <p>Đăng nhập (Nếu bạn đã có tài khoản)</p>
                    </div>
                    <div class="delivery-content-left-khachle row">
                        <input checked name="loaikhach" type="radio">
                        <p><span style="font-weight: bold;"> Khách lẻ </span> (Nếu bạn không muốn lưu lại thông tin) </p>
                    </div>
                    <div class="delivery-content-left-dangky row">
                        <input  name="loaikhach" type="radio">
                        <p><span style="font-weight: bold;"> Đăng ký </span> (Tạo tài khoản với thông tin bên dưới) </p>
                    </div>
                    <div class="delivery-content-left-input-top row">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Họ tên <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Điện thoại <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Tỉnh/Thành phố <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Phường/Xã <span style="color: red;">*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="delivery-content-left-input-bottom">
                        <label for="">Địa chỉ <span style="color: red;">*</span></label>
                            <input type="text">
                    </div>
                    <div class="delivery-content-left-button row">
                        <a href="cart.html"><span>&#171;</span><p >Quay lại giỏ hàng</p></a>
                        <button >
                            <a href="payment.html" style="font-weight: bold;">THANH TOÁN VÀ GIAO HÀNG</a>
                        </button>
                    </div>
                </div>  
                <div class="delivery-content-right">
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
                            <td style="font-weight: bold;" colspan="3">Tổng</td>
                            <td style="font-weight: bold;"><p>2.400.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                            <td style="font-weight: bold;"><p>40.000<sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight: bold;"><p>2.400.000<sup>đ</sup></p></td>
                        </tr>
                    </table>
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