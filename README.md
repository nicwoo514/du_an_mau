# Fashion Store - Trang thương mại điện tử thời trang nam

## Mô tả
Dự án website bán hàng thời trang nam được thiết kế theo phong cách tương tự 160store.com, sử dụng PHP, HTML, CSS và JavaScript.

## Tính năng chính

### 🏠 Trang chủ
- Header với logo, thanh tìm kiếm và menu tài khoản
- Menu navigation đa cấp với dropdown
- Banner slider tự động chuyển với 3 slides
- Danh sách sản phẩm mẫu với giá và khuyến mãi
- Footer với thông tin liên hệ và mạng xã hội

### 📱 Responsive Design
- Tối ưu cho desktop, tablet và mobile
- Menu hamburger trên thiết bị di động
- Grid layout linh hoạt cho sản phẩm
- Hình ảnh tự động điều chỉnh kích thước

### 🛒 Tương tác
- Tìm kiếm sản phẩm
- Thêm sản phẩm vào giỏ hàng
- Dropdown menu với hover effects
- Slider navigation với nút và tự động chuyển
- Thông báo khi thêm sản phẩm thành công

## Cấu trúc dự án

```
du_an_mau/
├── index.php              # Điểm vào chính, routing
├── commons/
│   ├── env.php            # Cấu hình môi trường
│   └── function.php       # Hàm tiện ích
├── controllers/
│   └── ProductController.php  # Controller xử lý logic
├── models/
│   └── ProductModel.php   # Model tương tác cơ sở dữ liệu
├── views/
│   └── trangchu.php       # View trang chủ
├── assets/
│   ├── css/
│   │   └── style.css      # Styles chính
│   ├── js/
│   │   └── script.js      # JavaScript tương tác
│   └── images/            # Thư mục hình ảnh (placeholder)
└── uploads/               # Thư mục upload files
```

## Công nghệ sử dụng

- **Backend**: PHP 8.3+ với mô hình MVC
- **Frontend**: HTML5, CSS3, JavaScript ES6+
- **CSS Framework**: Custom responsive CSS với Flexbox và Grid
- **Icons**: Font Awesome 6.0
- **Images**: Unsplash API cho hình ảnh demo

## Hướng dẫn cài đặt

### Yêu cầu hệ thống
- PHP 8.0 trở lên
- Web server (Apache/Nginx hoặc PHP built-in server)

### Cài đặt
1. Clone hoặc download dự án
2. Đặt vào thư mục web server
3. Khởi chạy server:
   ```bash
   php -S localhost:8000
   ```
4. Truy cập `http://localhost:8000`

## Tính năng đã triển khai

### ✅ Hoàn thành
- [x] Thiết kế giao diện trang chủ responsive
- [x] Header với logo, search bar, menu tài khoản
- [x] Navigation menu đa cấp với dropdown
- [x] Banner slider tự động với 3 slides
- [x] Danh sách 8 sản phẩm mẫu với hình ảnh
- [x] Hiển thị giá gốc và giá khuyến mãi
- [x] Badge giảm giá trên sản phẩm
- [x] Footer với 4 cột thông tin
- [x] Chức năng tìm kiếm cơ bản
- [x] Giỏ hàng với LocalStorage
- [x] Thông báo khi thêm sản phẩm
- [x] Tối ưu mobile với hamburger menu

### 🔄 Có thể mở rộng
- [ ] Trang chi tiết sản phẩm
- [ ] Trang danh mục sản phẩm
- [ ] Hệ thống đăng nhập/đăng ký
- [ ] Tích hợp cơ sở dữ liệu thực tế
- [ ] Hệ thống thanh toán
- [ ] Quản lý đơn hàng
- [ ] Admin panel

## Thông tin liên hệ

Dự án được phát triển như một mẫu demo cho website thương mại điện tử thời trang nam.

## License

MIT License - Tự do sử dụng cho mục đích học tập và phát triển.