<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div>
                    <i class="fas fa-phone"></i> Hotline: 0123.456.789
                </div>
                <div>
                    <i class="fas fa-truck"></i> Miễn phí vận chuyển cho đơn hàng từ 500k
                </div>
            </div>
        </div>
        
        <!-- Header Main -->
        <div class="header-main">
            <div class="container">
                <a href="#" class="logo">Fashion<span>Store</span></a>
                
                <div class="search-bar">
                    <input type="text" placeholder="Tìm kiếm sản phẩm...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
                
                <div class="header-actions">
                    <a href="#"><i class="fas fa-user"></i> Tài khoản</a>
                    <a href="#"><i class="fas fa-heart"></i> Yêu thích</a>
                    <a href="#"><i class="fas fa-shopping-cart"></i> Giỏ hàng <span class="cart-count">0</span></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="nav">
        <div class="container">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li>
                    <a href="#">Áo nam</a>
                    <div class="dropdown">
                        <a href="#">Áo thun</a>
                        <a href="#">Áo polo</a>
                        <a href="#">Áo sơ mi</a>
                        <a href="#">Áo khoác</a>
                        <a href="#">Áo hoodie</a>
                    </div>
                </li>
                <li>
                    <a href="#">Quần nam</a>
                    <div class="dropdown">
                        <a href="#">Quần jeans</a>
                        <a href="#">Quần chinos</a>
                        <a href="#">Quần short</a>
                        <a href="#">Quần jogger</a>
                    </div>
                </li>
                <li>
                    <a href="#">Phụ kiện</a>
                    <div class="dropdown">
                        <a href="#">Giày dép</a>
                        <a href="#">Thắt lưng</a>
                        <a href="#">Nón mũ</a>
                        <a href="#">Túi xách</a>
                    </div>
                </li>
                <li><a href="#">Thương hiệu</a></li>
                <li><a href="#">Khuyến mãi</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </nav>

    <!-- Banner Slider -->
    <section class="banner-slider">
        <?php foreach ($bannerSlides as $index => $slide): ?>
        <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
            <img src="<?php echo $slide['image']; ?>" alt="Banner <?php echo $index + 1; ?>">
            <div class="slide-content">
                <h2><?php echo $slide['title']; ?></h2>
                <p><?php echo $slide['subtitle']; ?></p>
                <a href="<?php echo $slide['button_link']; ?>" class="btn"><?php echo $slide['button_text']; ?></a>
            </div>
        </div>
        <?php endforeach; ?>
        
        <div class="slider-nav">
            <?php foreach ($bannerSlides as $index => $slide): ?>
            <button class="<?php echo $index === 0 ? 'active' : ''; ?>"></button>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section" id="products">
        <div class="container">
            <h2 class="section-title">Sản phẩm nổi bật</h2>
            
            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <div class="product-badge"><?php echo $product['badge']; ?></div>
                    </div>
                    <div class="product-info">
                        <h3><?php echo $product['name']; ?></h3>
                        <div class="price">
                            <?php if (isset($product['old_price'])): ?>
                            <span class="old-price"><?php echo number_format($product['old_price'], 0, ',', '.'); ?>đ</span>
                            <?php endif; ?>
                            <?php echo number_format($product['price'], 0, ',', '.'); ?>đ
                        </div>
                        <button class="btn add-to-cart">
                            <i class="fas fa-cart-plus"></i> Thêm vào giỏ
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#" class="btn">Xem tất cả sản phẩm</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Về chúng tôi</h3>
                    <ul>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Tin tức</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Hỗ trợ khách hàng</h3>
                    <ul>
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính sách bảo hành</a></li>
                        <li><a href="#">Phương thức thanh toán</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Danh mục</h3>
                    <ul>
                        <li><a href="#">Áo nam</a></li>
                        <li><a href="#">Quần nam</a></li>
                        <li><a href="#">Phụ kiện</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Theo dõi chúng tôi</h3>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
                        <li><a href="#"><i class="fab fa-tiktok"></i> TikTok</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Fashion Store. Tất cả quyền được bảo lưu.</p>
            </div>
        </div>
    </footer>

    <script src="./assets/js/script.js"></script>
</body>
</html>