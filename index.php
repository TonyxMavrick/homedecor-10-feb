<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HomeBliss Studio - Beautiful decor pieces designed to bring comfort, style, and personality into your home.">
    <title>HomeBliss Studio - Transform Your Space</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav-container">
            <div class="nav-content">
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <span class="logo-icon">✦</span>
                    <span class="logo-text">HomeBliss Studio</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="nav-links">
                    <a href="index.html" class="nav-link active">Home</a>
                    <a href="shop.html" class="nav-link">Shop</a>
                    <a href="about.html" class="nav-link">About</a>
                    <a href="contact.html" class="nav-link">Contact</a>
                    <button class="cart-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span>Cart (0)</span>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <svg class="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                    <svg class="close-icon hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div class="mobile-nav hidden" id="mobileNav">
                <div class="mobile-nav-links">
                    <a href="index.html" class="mobile-nav-link active">Home</a>
                    <a href="shop.html" class="mobile-nav-link">Shop</a>
                    <a href="about.html" class="mobile-nav-link">About</a>
                    <a href="contact.html" class="mobile-nav-link">Contact</a>
                    <button class="cart-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span>Cart (0)</span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <img src="https://images.unsplash.com/photo-1636098290783-3e721b7748a9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBob21lJTIwZGVjb3J8ZW58MXx8fHwxNzcwNTcyMzQ1fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Hero" class="hero-image">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Transform Your Space Into a Home You Love</h1>
                    <p class="hero-subtitle">Beautiful decor pieces designed to bring comfort, style, and personality into your home.</p>
                    <div class="hero-buttons">
                        <a href="shop.html" class="btn btn-primary">Explore Collections</a>
                        <a href="shop.html" class="btn btn-secondary">Get Decor Inspiration</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Collections -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Featured Collections</h2>
                    <p class="section-subtitle">Discover our carefully curated collections designed to elevate every room in your home</p>
                </div>
                <div class="collections-grid">
                    <a href="shop.html?category=Living%20Room%20Decor" class="collection-card">
                        <img src="https://images.unsplash.com/photo-1705321963943-de94bb3f0dd3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjBsaXZpbmclMjByb29tJTIwaW50ZXJpb3IlMjBkZXNpZ258ZW58MXx8fHwxNzcwNTE5NzUwfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Living Room Decor">
                        <div class="collection-overlay"></div>
                        <div class="collection-content">
                            <h3 class="collection-title">Living Room Decor</h3>
                            <span class="collection-cta">View Collection</span>
                        </div>
                    </a>
                    <a href="shop.html?category=Bedroom%20Decor" class="collection-card">
                        <img src="https://images.unsplash.com/photo-1767050371633-675072d4bed7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxlbGVnYW50JTIwYmVkcm9vbSUyMGludGVyaW9yJTIwd2hpdGV8ZW58MXx8fHwxNzcwNTg0NjQ1fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Bedroom Decor">
                        <div class="collection-overlay"></div>
                        <div class="collection-content">
                            <h3 class="collection-title">Bedroom Decor</h3>
                            <span class="collection-cta">View Collection</span>
                        </div>
                    </a>
                    <a href="shop.html?category=Wall%20Art%20%26%20Mirrors" class="collection-card">
                        <img src="https://images.unsplash.com/photo-1612845123529-76a9edc5388a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx3YWxsJTIwYXJ0JTIwZ2FsbGVyeXxlbnwxfHx8fDE3NzA1ODQ2NDZ8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Wall Art & Mirrors">
                        <div class="collection-overlay"></div>
                        <div class="collection-content">
                            <h3 class="collection-title">Wall Art & Mirrors</h3>
                            <span class="collection-cta">View Collection</span>
                        </div>
                    </a>
                    <a href="shop.html?category=Lighting%20%26%20Lamps" class="collection-card">
                        <img src="https://images.unsplash.com/photo-1758945630632-7a8f1caffc6d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjBwZW5kYW50JTIwbGlnaHRpbmd8ZW58MXx8fHwxNzcwNTg0NjQ3fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Lighting & Lamps">
                        <div class="collection-overlay"></div>
                        <div class="collection-content">
                            <h3 class="collection-title">Lighting & Lamps</h3>
                            <span class="collection-cta">View Collection</span>
                        </div>
                    </a>
                    <a href="shop.html?category=Decorative%20Accessories" class="collection-card">
                        <img src="https://images.unsplash.com/photo-1722356541579-c5c6b0a42789?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxkZWNvcmF0aXZlJTIwaG9tZSUyMGFjY2Vzc29yaWVzfGVufDF8fHx8MTc3MDU4NDY0N3ww&ixlib=rb-4.1.0&q=80&w=1080" alt="Decorative Accessories">
                        <div class="collection-overlay"></div>
                        <div class="collection-content">
                            <h3 class="collection-title">Decorative Accessories</h3>
                            <span class="collection-cta">View Collection</span>
                        </div>
                    </a>
                    <a href="shop.html?category=Minimalist%20Collection" class="collection-card">
                        <img src="https://images.unsplash.com/photo-1617325279446-f0831b1d369d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtaW5pbWFsaXN0JTIwaG9tZSUyMGRlY29yfGVufDF8fHx8MTc3MDQ4ODQ4M3ww&ixlib=rb-4.1.0&q=80&w=1080" alt="Minimalist Collection">
                        <div class="collection-overlay"></div>
                        <div class="collection-content">
                            <h3 class="collection-title">Minimalist Collection</h3>
                            <span class="collection-cta">View Collection</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose HomeBliss Studio -->
        <section class="section section-gray">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Why Choose HomeBliss Studio</h2>
                    <p class="section-subtitle">We're committed to helping you create a home that reflects your unique style and personality</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <svg class="feature-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <h3 class="feature-title">Thoughtfully Curated Designs</h3>
                        <p class="feature-description">Each piece is carefully selected for its unique style and quality</p>
                    </div>
                    <div class="feature-card">
                        <svg class="feature-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="8" r="7"></circle>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        </svg>
                        <h3 class="feature-title">Premium Quality Materials</h3>
                        <p class="feature-description">Only the finest materials for lasting beauty and durability</p>
                    </div>
                    <div class="feature-card">
                        <svg class="feature-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                            <path d="M2 2l7.586 7.586"></path>
                            <circle cx="11" cy="11" r="2"></circle>
                        </svg>
                        <h3 class="feature-title">Modern & Timeless Styles</h3>
                        <p class="feature-description">Designs that complement both contemporary and classic interiors</p>
                    </div>
                    <div class="feature-card">
                        <svg class="feature-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <h3 class="feature-title">Trusted by Home Lovers</h3>
                        <p class="feature-description">Join thousands of satisfied customers who love their homes</p>
                    </div>
                    <div class="feature-card">
                        <svg class="feature-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <h3 class="feature-title">Easy Shopping Experience</h3>
                        <p class="feature-description">Simple browsing, secure checkout, and fast delivery</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Decor Picks -->
        <section class="section">
            <div class="container">
                <div class="section-header-with-link">
                    <div>
                        <h2 class="section-title">Popular Decor Picks</h2>
                        <p class="section-subtitle">Bestsellers loved by our customers</p>
                    </div>
                    <a href="shop.html" class="view-all-link">
                        <span>View All</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
                <div class="products-grid" id="popularProducts"></div>
                <div class="mobile-view-all">
                    <a href="shop.html" class="view-all-link">
                        <span>View All Products</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Inspiration Section -->
        <section class="inspiration-section">
            <img src="https://images.unsplash.com/photo-1600988718561-b2dde28f8a05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb3p5JTIwaG9tZSUyMGludGVyaW9yJTIwbmV1dHJhbHxlbnwxfHx8fDE3NzA1ODQ2NDh8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Inspiration" class="inspiration-image">
            <div class="inspiration-overlay"></div>
            <div class="inspiration-content">
                <div class="container">
                    <div class="inspiration-text">
                        <h2 class="inspiration-title">Find Your Style Inspiration</h2>
                        <p class="inspiration-subtitle">Explore beautifully styled interiors and discover how to create the home of your dreams</p>
                        <a href="shop.html" class="btn btn-secondary">Browse Ideas</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand -->
                <div class="footer-brand">
                    <a href="index.html" class="logo">
                        <span class="logo-icon">✦</span>
                        <span class="logo-text">HomeBliss Studio</span>
                    </a>
                    <p class="footer-description">Beautiful decor pieces designed to bring comfort, style, and personality into your home.</p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="footer-section">
                    <h3 class="footer-heading">Contact</h3>
                    <ul class="footer-contact">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span>+1-365-435-4432</span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>help@HomeBlissStudio.in</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 HomeBliss Studio. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="products.js"></script>
    <script src="script.js"></script>
</body>
</html>
