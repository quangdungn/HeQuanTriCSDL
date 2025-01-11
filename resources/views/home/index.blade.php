<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Management</title>
  <style>
    /* Global Styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    /* Header Banner */
    .header-banner {
      background: linear-gradient(to right, #ff5722, #ff8a50);
      padding: 10px 20px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
    }

    .header-banner .logo {
      display: flex;
      align-items: center;
      font-size: 20px;
      font-weight: bold;
    }

    .header-banner .logo img {
      width: 30px;
      margin-right: 10px;
    }

    .header-banner .search-bar {
      flex-grow: 1;
      margin: 0 20px;
      display: flex;
      align-items: center;
    }

    .header-banner .search-bar input {
      flex-grow: 1;
      padding: 10px;
      border-radius: 20px;
      border: none;
      font-size: 14px;
      outline: none;
    }

    .header-banner .search-bar button {
      background-color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 20px;
      margin-left: -40px;
      cursor: pointer;
    }

    .header-banner .actions {
      display: flex;
      align-items: center;
    }

    .header-banner .actions a {
      margin-left: 20px;
      color: white;
      text-decoration: none;
      font-size: 14px;
      position: relative;
    }

    .header-banner .actions a .notification-badge {
      background-color: red;
      color: white;
      border-radius: 50%;
      font-size: 12px;
      padding: 2px 6px;
      position: absolute;
      top: -5px;
      right: -10px;
    }

    .header-banner .user-menu {
      margin-left: 20px;
      display: flex;
      align-items: center;
    }

    .header-banner .user-menu img {
      width: 30px;
      border-radius: 50%;
      margin-right: 5px;
    }

    .header-banner .quick-links {
      margin-top: 10px;
      background: #ff8a50;
      padding: 10px 20px;
      display: flex;
      justify-content: space-around;
      font-size: 14px;
    }

    .header-banner .quick-links a {
      color: white;
      text-decoration: none;
    }

    /* Categories */
    .categories {
      display: flex;
      justify-content: space-around;
      background-color: #fff;
      padding: 15px 0;
    }

    .categories .category {
      text-align: center;
      padding: 10px;
      background-color: #f7f7f7;
      border-radius: 5px;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .categories .category:hover {
      transform: scale(1.1);
    }

    /* Flash Sale Section */
    .flash-sale {
      padding: 20px;
      background-color: #fff;
    }

    .flash-sale h2 {
      text-align: center;
    }

    .flash-sale .timer {
      text-align: center;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .flash-sale .product-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .product-card {
      background-color: #fff;
      text-align: center;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-card img {
      width: 100px;
      height: 100px;
      margin-bottom: 10px;
    }

    .product-card h3 {
      font-size: 16px;
      margin: 10px 0;
    }

    .product-card .price {
      color: #ff5722;
      font-size: 18px;
      font-weight: bold;
    }

    /* Footer */
    footer {
            position: fixed; /* Giữ cố định vị trí */
            bottom: 0; /* Cố định ở đáy */
            left: 0;
            width: 100%; /* Chiều rộng toàn bộ màn hình */
            background-color: #333; /* Màu nền */
            color: #fff; /* Màu chữ */
            text-align: center; /* Canh giữa nội dung */
            padding: 10px 0; /* Khoảng cách trên dưới */
            z-index: 1000; /* Đảm bảo footer luôn ở trên */
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2); /* Hiệu ứng đổ bóng */
        }
  </style>
</head>
<body>
  <!-- Header Banner -->
  <div class="header-banner">
    <!-- Logo -->
    <div class="logo">
      Shopee
    </div>

    <!-- Search Bar -->
    <div class="search-bar">
      <input type="text" placeholder="Chỉ từ 1.000đ">
      <button onclick=" window.location.href='{{ route('shop') }}'">🔍</button>
    </div>

    <!-- Actions -->
    <div class="actions">
      <a href="#">Thông Báo <span class="notification-badge">5</span></a>
      <a href="#">Hỗ Trợ</a>
      <a href="#">Tiếng Việt ▼</a>
      <div class="user-menu">
        <img src="https://via.placeholder.com/30" alt="User">
        bckduc121004
      </div>
      <a href="#" class="cart-icon">🛒 <span class="notification-badge">1</span></a>
    </div>
  </div>

  <!-- Quick Links -->
  <div class="header-banner quick-links">
    <a href="#">Loa Bluetooth Mini</a>
    <a href="#">Chân Tản Nhiệt</a>
    <a href="#">Giá Đỡ Laptop Gỗ</a>
    <a href="#">Áo Gaoranger</a>
    <a href="#">Set Đồ Nam Hàn Quốc</a>
    <a href="#">Ghế Gaming Ngồi Bệt</a>
  </div>

  <!-- Categories -->
  <section class="categories">
    <div class="category">Electronics</div>
    <div class="category">Fashion</div>
    <div class="category">Home & Living</div>
    <div class="category">Beauty</div>
    <div class="category">Health</div>
  </section>

  <!-- Flash Sale -->
  <section class="flash-sale">
    <h2>Flash Sale</h2>
    <div class="timer">Time Left: <span>04:13:45</span></div>
    <div class="product-grid">
      <div class="product-card">
        <img src="https://via.placeholder.com/150" alt="Product">
        <h3>Product 1</h3>
        <p class="price">$15.00</p>
      </div>
      <div class="product-card">
        <img src="https://via.placeholder.com/150" alt="Product">
        <h3>Product 2</h3>
        <p class="price">$20.00</p>
      </div>
      <div class="product-card">
        <img src="https://via.placeholder.com/150" alt="Product">
        <h3>Product 3</h3>
        <p class="price">$10.00</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>© 2025 Shopee Clone. All rights reserved.</p>
  </footer>
</body>
</html>
