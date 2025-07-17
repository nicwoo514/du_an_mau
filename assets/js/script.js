// Banner Slider Functionality
class BannerSlider {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll('.slide');
        this.navButtons = document.querySelectorAll('.slider-nav button');
        this.totalSlides = this.slides.length;
        
        this.init();
    }
    
    init() {
        if (this.totalSlides > 0) {
            this.showSlide(0);
            this.autoSlide();
            this.bindEvents();
        }
    }
    
    showSlide(index) {
        // Hide all slides
        this.slides.forEach(slide => slide.classList.remove('active'));
        this.navButtons.forEach(button => button.classList.remove('active'));
        
        // Show current slide
        this.slides[index].classList.add('active');
        this.navButtons[index].classList.add('active');
        
        this.currentSlide = index;
    }
    
    nextSlide() {
        const next = (this.currentSlide + 1) % this.totalSlides;
        this.showSlide(next);
    }
    
    prevSlide() {
        const prev = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.showSlide(prev);
    }
    
    autoSlide() {
        setInterval(() => {
            this.nextSlide();
        }, 5000); // Change slide every 5 seconds
    }
    
    bindEvents() {
        // Navigation buttons
        this.navButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                this.showSlide(index);
            });
        });
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                this.prevSlide();
            } else if (e.key === 'ArrowRight') {
                this.nextSlide();
            }
        });
    }
}

// Mobile Navigation Toggle
class MobileNav {
    constructor() {
        this.nav = document.querySelector('.nav');
        this.createMobileToggle();
    }
    
    createMobileToggle() {
        const mobileToggle = document.createElement('button');
        mobileToggle.className = 'mobile-nav-toggle';
        mobileToggle.innerHTML = '☰';
        mobileToggle.style.cssText = `
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 10px;
        `;
        
        this.nav.appendChild(mobileToggle);
        
        mobileToggle.addEventListener('click', () => {
            this.nav.classList.toggle('mobile-active');
        });
        
        // Add mobile styles
        const style = document.createElement('style');
        style.textContent = `
            @media (max-width: 768px) {
                .mobile-nav-toggle {
                    display: block !important;
                }
                
                .nav ul {
                    display: none;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    right: 0;
                    background: #333;
                    flex-direction: column;
                }
                
                .nav.mobile-active ul {
                    display: flex;
                }
                
                .nav .dropdown {
                    position: static;
                    opacity: 1;
                    visibility: visible;
                    box-shadow: none;
                    background: #444;
                }
            }
        `;
        document.head.appendChild(style);
    }
}

// Product Card Animations
class ProductAnimations {
    constructor() {
        this.observeProducts();
    }
    
    observeProducts() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });
        
        const productCards = document.querySelectorAll('.product-card');
        productCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s, transform 0.6s';
            observer.observe(card);
        });
    }
}

// Search Functionality
class Search {
    constructor() {
        this.searchInput = document.querySelector('.search-bar input');
        this.searchButton = document.querySelector('.search-bar button');
        this.bindEvents();
    }
    
    bindEvents() {
        this.searchButton.addEventListener('click', (e) => {
            e.preventDefault();
            this.performSearch();
        });
        
        this.searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                this.performSearch();
            }
        });
    }
    
    performSearch() {
        const query = this.searchInput.value.trim();
        if (query) {
            // In a real application, this would make an AJAX request
            alert(`Tìm kiếm: "${query}"`);
        }
    }
}

// Shopping Cart (basic functionality)
class ShoppingCart {
    constructor() {
        this.cart = JSON.parse(localStorage.getItem('cart')) || [];
        this.bindEvents();
        this.updateCartDisplay();
    }
    
    bindEvents() {
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('add-to-cart')) {
                e.preventDefault();
                this.addToCart(e.target);
            }
        });
    }
    
    addToCart(button) {
        const productCard = button.closest('.product-card');
        const productName = productCard.querySelector('h3').textContent;
        const productPrice = productCard.querySelector('.price').textContent;
        const productImage = productCard.querySelector('img').src;
        
        const product = {
            id: Date.now(),
            name: productName,
            price: productPrice,
            image: productImage,
            quantity: 1
        };
        
        this.cart.push(product);
        localStorage.setItem('cart', JSON.stringify(this.cart));
        this.updateCartDisplay();
        this.showAddedMessage(productName);
    }
    
    updateCartDisplay() {
        const cartCount = document.querySelector('.cart-count');
        if (cartCount) {
            cartCount.textContent = this.cart.length;
        }
    }
    
    showAddedMessage(productName) {
        const message = document.createElement('div');
        message.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            z-index: 10000;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        `;
        message.textContent = `Đã thêm "${productName}" vào giỏ hàng`;
        
        document.body.appendChild(message);
        
        setTimeout(() => {
            message.remove();
        }, 3000);
    }
}

// Smooth Scrolling
function smoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    new BannerSlider();
    new MobileNav();
    new ProductAnimations();
    new Search();
    new ShoppingCart();
    smoothScroll();
    
    // Add loading animation
    const body = document.body;
    body.style.opacity = '0';
    body.style.transition = 'opacity 0.5s';
    
    setTimeout(() => {
        body.style.opacity = '1';
    }, 100);
});

// Utility Functions
function formatPrice(price) {
    return new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND'
    }).format(price);
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}