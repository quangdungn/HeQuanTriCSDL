<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng - Shopee</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #ff5722;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-left {
            display: flex;
            align-items: center;
        }
        .header-left img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }
        .header-left h1 {
            margin: 0;
            font-size: 20px;
        }
        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .search-bar {
            margin: 10px 20px;
            display: flex;
            align-items: center;
        }
        .search-bar input {
            padding: 8px;
            width: 400px;
            border: 1px solid #ff5722;
            border-right: none;
            border-radius: 4px 0 0 4px;
            outline: none;
        }
        .search-bar button {
            padding: 8px 20px;
            border: none;
            background-color: #ff5722;
            color: white;
            cursor: pointer;
            border-radius: 0 4px 4px 0;
        }
        .search-bar button:hover {
            background-color: #e64a19;
        }

        /* Cart */
        .cart-container {
            margin: 20px auto;
            padding: 20px;
            max-width: 1200px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .cart-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .cart-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
        }
        .cart-details {
            flex-grow: 1;
            margin-left: 20px;
        }
        .cart-details h4 {
            margin: 0 0 5px 0;
            font-size: 16px;
            color: #333;
        }
        .cart-details p {
            margin: 0;
            font-size: 14px;
            color: #888;
        }
        .cart-price {
            text-align: center;
            font-size: 14px;
            color: #e64a19;
        }
        .cart-actions {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .cart-actions input {
            width: 40px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
        }
        .cart-actions button {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .cart-actions button:hover {
            background-color: #e64a19;
        }
        .cart-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .cart-footer .total {
            font-size: 18px;
            font-weight: bold;
        }
        .cart-footer button {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .cart-footer button:hover {
            background-color: #e64a19;
        }
        .voucher-section, .shipping-info {
            margin: 15px 0;
            font-size: 14px;
            color: #666;
        }
        .voucher-section a, .shipping-info a {
            color: #ff5722;
            text-decoration: none;
        }
        .voucher-section a:hover, .shipping-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-left">
            <img src="https://via.placeholder.com/30" alt="Logo">
            <h1>Shopee | Giỏ Hàng</h1>
        </div>
        <div class="header-right">
            <span>Kênh Người Bán</span>
            <span>Tải ứng dụng</span>
            <span>Kết nối</span>
            <span>Thông Báo</span>
            <span>Hỗ Trợ</span>
            <span>Tiếng Việt</span>
            <span>bckduc121004</span>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="search-bar">
        <input type="text" placeholder="Tìm sản phẩm, thương hiệu, và tên shop">
        <button>🔍</button>
    </div>

    <!-- Cart -->
    <div class="cart-container">
        <div class="cart-header">Giỏ Hàng</div>
        
        <!-- Sản phẩm 1 -->
        <div class="cart-item">
            <input type="checkbox">
            <img src="https://via.placeholder.com/100" alt="Sản phẩm">
            <div class="cart-details">
                <h4>Chân Tân Nhiệt Bằng Gỗ, Bàn Máy Tính</h4>
                <p>Flash Sale kết thúc lúc 23:59:59</p>
            </div>
            <div class="cart-price">
                <del>496.000đ</del><br>
                <span style="font-weight: bold;">446.550đ</span>
            </div>
            <div class="cart-actions">
                <button>-</button>
                <input type="number" value="1" min="1">
                <button>+</button>
            </div>
            <div style="text-align: center; color: red;">
                <a href="#">Xóa</a><br>
                <a href="#">Tìm sản phẩm tương tự</a>
            </div>
        </div>

        <!-- Sản phẩm 2 -->
        <div class="cart-item">
            <input type="checkbox">
            <img src="https://via.placeholder.com/100" alt="Sản phẩm">
            <div class="cart-details">
                <h4>Đèn Bàn LED Văn Phòng</h4>
                <p>Flash Sale kết thúc lúc 20:00:00</p>
            </div>
            <div class="cart-price">
                <del>250.000đ</del><br>
                <span style="font-weight: bold;">200.000đ</span>
            </div>
            <div class="cart-actions">
                <button>-</button>
                <input type="number" value="1" min="1">
                <button>+</button>
            </div>
            <div style="text-align: center; color: red;">
                <a href="#">Xóa</a><br>
                <a href="#">Tìm sản phẩm tương tự</a>
            </div>
        </div>

        <!-- Sản phẩm 3 -->
        <div class="cart-item">
            <input type="checkbox">
            <img src="https://via.placeholder.com/100" alt="Sản phẩm">
            <div class="cart-details">
                <h4>Tai Nghe Bluetooth Không Dây</h4>
                <p>Flash Sale kết thúc lúc 18:30:00</p>
            </div>
            <div class="cart-price">
                <del>800.000đ</del><br>
                <span style="font-weight: bold;">750.000đ</span>
            </div>
            <div class="cart-actions">
                <button>-</button>
                <input type="number" value="1" min="1">
                <button>+</button>
            </div>
            <div style="text-align: center; color: red;">
                <a href="#">Xóa</a><br>
                <a href="#">Tìm sản phẩm tương tự</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="cart-footer">
            <div class="total">
                Tổng thanh toán (3 Sản phẩm): <span style="color: #e64a19;">0đ</span>
            </div>
            <button>Mua Hàng</button>
        </div>
    </div>
</body>
</html>
