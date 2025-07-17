<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
    }

    public function Home()
    {
        $title = "Fashion Store - Thời trang nam cao cấp";
        
        // Sample banner slides
        $bannerSlides = [
            [
                'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                'title' => 'Bộ Sưu Tập Mùa Hè 2024',
                'subtitle' => 'Khuyến mãi lên đến 50% cho tất cả sản phẩm',
                'button_text' => 'Mua Ngay',
                'button_link' => '#products'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                'title' => 'Thời Trang Công Sở',
                'subtitle' => 'Lịch lãm và chuyên nghiệp',
                'button_text' => 'Khám Phá',
                'button_link' => '#products'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                'title' => 'Phong Cách Trẻ Trung',
                'subtitle' => 'Năng động và hiện đại',
                'button_text' => 'Xem Thêm',
                'button_link' => '#products'
            ]
        ];
        
        // Sample products
        $products = [
            [
                'id' => 1,
                'name' => 'Áo Polo Nam Premium',
                'price' => 450000,
                'old_price' => 550000,
                'image' => 'https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'badge' => 'Giảm 18%'
            ],
            [
                'id' => 2,
                'name' => 'Áo Sơ Mi Công Sở',
                'price' => 350000,
                'old_price' => 420000,
                'image' => 'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'badge' => 'Giảm 17%'
            ],
            [
                'id' => 3,
                'name' => 'Quần Jeans Slim Fit',
                'price' => 650000,
                'old_price' => 780000,
                'image' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'badge' => 'Giảm 17%'
            ],
            [
                'id' => 4,
                'name' => 'Áo Khoác Bomber',
                'price' => 850000,
                'old_price' => 1050000,
                'image' => 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'badge' => 'Giảm 19%'
            ],
            [
                'id' => 5,
                'name' => 'Áo Thun Basic',
                'price' => 250000,
                'old_price' => 300000,
                'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'badge' => 'Giảm 17%'
            ],
            [
                'id' => 6,
                'name' => 'Áo Hoodie Streetwear',
                'price' => 750000,
                'old_price' => 900000,
                'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'badge' => 'Giảm 17%'
            ],
            [
                'id' => 7,
                'name' => 'Quần Chinos Cao Cấp',
                'price' => 550000,
                'old_price' => 650000,
                'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'badge' => 'Giảm 15%'
            ],
            [
                'id' => 8,
                'name' => 'Áo Blazer Lịch Lãm',
                'price' => 1250000,
                'old_price' => 1500000,
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80',
                'badge' => 'Giảm 17%'
            ]
        ];
        
        require_once './views/trangchu.php';
    }
}
