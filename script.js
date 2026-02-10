// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileNav = document.getElementById('mobileNav');
    
    if (mobileMenuBtn && mobileNav) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileNav.classList.toggle('hidden');
            const menuIcon = this.querySelector('.menu-icon');
            const closeIcon = this.querySelector('.close-icon');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }

    // Load popular products on home page
    const popularProductsContainer = document.getElementById('popularProducts');
    if (popularProductsContainer && typeof products !== 'undefined') {
        renderPopularProducts();
    }

    // Initialize shop page if exists
    const shopProductsGrid = document.getElementById('shopProductsGrid');
    if (shopProductsGrid) {
        initializeShopPage();
    }

    // Initialize product detail page if exists
    const productDetailContainer = document.querySelector('.product-detail-container');
    if (productDetailContainer) {
        initializeProductDetail();
    }

    // Initialize contact form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', handleContactSubmit);
    }
});

// Render popular products
function renderPopularProducts() {
    const popularProductsContainer = document.getElementById('popularProducts');
    const popularProducts = products.slice(0, 4);
    
    popularProducts.forEach(product => {
        const productCard = createProductCard(product);
        popularProductsContainer.appendChild(productCard);
    });
}

// Create product card element
function createProductCard(product) {
    const card = document.createElement('a');
    card.href = `product-detail.html?id=${product.id}`;
    card.className = 'product-card';
    
    card.innerHTML = `
        <div class="product-image-container">
            <img src="${product.image}" alt="${product.name}">
        </div>
        <h3 class="product-name">${product.name}</h3>
        <p class="product-category">${product.category}</p>
        <p class="product-price">$${product.price}</p>
    `;
    
    return card;
}

// Shop Page Functions
function initializeShopPage() {
    // Get URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const categoryParam = urlParams.get('category');
    
    // Set initial filter if category is in URL
    if (categoryParam) {
        const categoryRadio = document.querySelector(`input[name="category"][value="${categoryParam}"]`);
        if (categoryRadio) {
            categoryRadio.checked = true;
        }
    }
    
    // Render products
    renderShopProducts();
    
    // Add event listeners for filters
    const filterInputs = document.querySelectorAll('input[name="category"], input[name="room"], input[name="price"]');
    filterInputs.forEach(input => {
        input.addEventListener('change', renderShopProducts);
    });
    
    // Clear filters button
    const clearFiltersBtn = document.querySelector('.clear-filters-btn');
    if (clearFiltersBtn) {
        clearFiltersBtn.addEventListener('click', function() {
            filterInputs.forEach(input => input.checked = false);
            renderShopProducts();
        });
    }
    
    // Individual clear buttons
    const clearCategoryBtn = document.getElementById('clearCategory');
    if (clearCategoryBtn) {
        clearCategoryBtn.addEventListener('click', function() {
            document.querySelectorAll('input[name="category"]').forEach(input => input.checked = false);
            renderShopProducts();
        });
    }
    
    const clearRoomBtn = document.getElementById('clearRoom');
    if (clearRoomBtn) {
        clearRoomBtn.addEventListener('click', function() {
            document.querySelectorAll('input[name="room"]').forEach(input => input.checked = false);
            renderShopProducts();
        });
    }
    
    const clearPriceBtn = document.getElementById('clearPrice');
    if (clearPriceBtn) {
        clearPriceBtn.addEventListener('click', function() {
            document.querySelectorAll('input[name="price"]').forEach(input => input.checked = false);
            renderShopProducts();
        });
    }
    
    // Mobile filters toggle
    const filtersToggle = document.querySelector('.filters-toggle');
    const filtersSidebar = document.querySelector('.filters-sidebar');
    if (filtersToggle && filtersSidebar) {
        filtersToggle.addEventListener('click', function() {
            filtersSidebar.classList.toggle('active');
        });
    }
}

function renderShopProducts() {
    const shopProductsGrid = document.getElementById('shopProductsGrid');
    const productsCount = document.getElementById('productsCount');
    const noProductsMessage = document.getElementById('noProducts');
    
    // Get selected filters
    const selectedCategory = document.querySelector('input[name="category"]:checked')?.value;
    const selectedRoom = document.querySelector('input[name="room"]:checked')?.value;
    const selectedPrice = document.querySelector('input[name="price"]:checked')?.value;
    
    // Filter products
    let filteredProducts = products.filter(product => {
        if (selectedCategory && product.category !== selectedCategory) return false;
        if (selectedRoom && product.room !== selectedRoom) return false;
        if (selectedPrice) {
            const [min, max] = selectedPrice.split('-').map(Number);
            if (max) {
                if (product.price < min || product.price > max) return false;
            } else {
                if (product.price < min) return false;
            }
        }
        return true;
    });
    
    // Update count
    if (productsCount) {
        productsCount.textContent = `Showing ${filteredProducts.length} product${filteredProducts.length !== 1 ? 's' : ''}`;
    }
    
    // Clear grid
    shopProductsGrid.innerHTML = '';
    
    // Show/hide no products message
    if (filteredProducts.length === 0) {
        if (noProductsMessage) {
            noProductsMessage.classList.remove('hidden');
        }
        shopProductsGrid.classList.add('hidden');
    } else {
        if (noProductsMessage) {
            noProductsMessage.classList.add('hidden');
        }
        shopProductsGrid.classList.remove('hidden');
        
        // Render filtered products
        filteredProducts.forEach(product => {
            const productCard = createProductCard(product);
            shopProductsGrid.appendChild(productCard);
        });
    }
    
    // Update clear button visibility
    updateClearButtons();
}

function updateClearButtons() {
    const clearCategoryBtn = document.getElementById('clearCategory');
    const clearRoomBtn = document.getElementById('clearRoom');
    const clearPriceBtn = document.getElementById('clearPrice');
    
    if (clearCategoryBtn) {
        const hasCategory = document.querySelector('input[name="category"]:checked');
        clearCategoryBtn.style.display = hasCategory ? 'block' : 'none';
    }
    
    if (clearRoomBtn) {
        const hasRoom = document.querySelector('input[name="room"]:checked');
        clearRoomBtn.style.display = hasRoom ? 'block' : 'none';
    }
    
    if (clearPriceBtn) {
        const hasPrice = document.querySelector('input[name="price"]:checked');
        clearPriceBtn.style.display = hasPrice ? 'block' : 'none';
    }
}

// Product Detail Page Functions
function initializeProductDetail() {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = parseInt(urlParams.get('id'));
    
    if (!productId) {
        window.location.href = 'shop.html';
        return;
    }
    
    const product = products.find(p => p.id === productId);
    
    if (!product) {
        window.location.href = 'shop.html';
        return;
    }
    
    // Update breadcrumb
    const breadcrumbCurrent = document.querySelector('.breadcrumb .current');
    if (breadcrumbCurrent) {
        breadcrumbCurrent.textContent = product.name;
    }
    
    // Update product details
    document.getElementById('productImage').src = product.image;
    document.getElementById('productImage').alt = product.name;
    document.getElementById('productTitle').textContent = product.name;
    document.getElementById('productPrice').textContent = `$${product.price}`;
    document.getElementById('productDescription').textContent = product.description;
    document.getElementById('productMaterials').textContent = product.materials;
    document.getElementById('productDimensions').textContent = product.dimensions;
    document.getElementById('productCare').textContent = product.care;
    
    // Quantity controls
    let quantity = 1;
    const quantityValue = document.getElementById('quantityValue');
    const decreaseBtn = document.getElementById('decreaseQuantity');
    const increaseBtn = document.getElementById('increaseQuantity');
    
    decreaseBtn.addEventListener('click', function() {
        if (quantity > 1) {
            quantity--;
            quantityValue.textContent = quantity;
        }
    });
    
    increaseBtn.addEventListener('click', function() {
        quantity++;
        quantityValue.textContent = quantity;
    });
    
    // Add to cart button
    const addToCartBtn = document.getElementById('addToCart');
    addToCartBtn.addEventListener('click', function() {
        alert(`Added ${quantity} x ${product.name} to cart!`);
    });
    
    // Render related products
    renderRelatedProducts(product);
}

function renderRelatedProducts(currentProduct) {
    const relatedProductsGrid = document.getElementById('relatedProductsGrid');
    const relatedProductsSection = document.querySelector('.related-products');
    
    if (!relatedProductsGrid) return;
    
    const relatedProducts = products
        .filter(p => p.category === currentProduct.category && p.id !== currentProduct.id)
        .slice(0, 4);
    
    if (relatedProducts.length === 0) {
        relatedProductsSection.style.display = 'none';
        return;
    }
    
    relatedProducts.forEach(product => {
        const productCard = createProductCard(product);
        relatedProductsGrid.appendChild(productCard);
    });
}

// Contact Form Handler
function handleContactSubmit(e) {
    e.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    // In a real application, this would send the data to a server
    alert('Thank you for your message! We will get back to you soon.');
    
    // Reset form
    e.target.reset();
}
