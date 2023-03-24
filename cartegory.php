<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                            <a href="" class="fa fa-user-secret"> </a>
                        </li>
                        <li> 
                            <a class="fa fa-shopping-cart"> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </secsion>
    <!------------------------------------------Cartegory----------------------------------------------->
    <section class="cartegory">
        <div class="container">
            <br>
            <div class="cartegory-top row">
                <br><p>Trang chủ</p> <span>&#10230;</span> <p>Áo-QUẦN</p> <span>&#10230;</span> <p>Hàng mới về</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="cartegory-left">
                    <ul>
                        <li class="cartegory-left-li"><a href="#">ÁO-QUẦN</a>
                            <ul>
                                <li><a href="">HÀNG MỚI VỀ</a></li>
                            </ul>
                        </li>
                        <li class="cartegory-left-li"><a href="#">TÚI-BALO</a>
                            <ul>
                                <li><a href="">HÀNG MỚI VỀ</a></li> 
                            </ul>
                        </li>
                        <li class="cartegory-left-li"><a href="">MŨ-NÓN</a></li>
                        <li class="cartegory-left-li"><a href="">GIÀY-DÉP</a></li>
                        <li class="cartegory-left-li"><a href="">PHỤ KIỆN</a></li>
                    </ul>
                </div>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item">  
                        <p>HÀNG MỚI VỀ</p>
                    </div>
                    <div class="cartegory-right-top-item">
                        <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
                    </div>
                    <div class="cartegory-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                        </select>
                    </div>
                    <div class="cartegory-right-content row">
                        <?php
                            include "class/product_class.php";
                        ?>
                        <?php
                            $product = new product;
                            $show_product = $product ->show_product();
                        ?>
                        <?php
                        if($show_product){$i=0;
                            while($result = $show_product->fetch_assoc ()) {$i++;
                        ?>
                        
                        <tr>
                            <img src="/images<?php echo $result['product_img'] ?>">
                            <td><h1><?php echo $result['product_name'] ?></h1></td>
                            <td><p><?php echo $result['product_price'] ?><sup>đ</sup></p></td>
                        </tr>
                        <?php
                        }
                        }
                        ?>
                        
                    </div>
                    <div class="cartegory-right-bottom row">
                        <div class="cartegory-right-bottom-items">
                            <p>Hiển thị 2 <span>|</span> 4 sản phẩm</p>
                        </div>
                        <div class="cartegory-right-bottom-items">
                            <p><span>&#171;</span> 1 2 3 4 5 <span>&#187;</span>Trang cuối</p>
                        </div>
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
    
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    


</body>
</html>