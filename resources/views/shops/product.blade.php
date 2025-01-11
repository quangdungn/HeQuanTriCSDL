<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng - Shopee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .header {
            background-color: #ff6f00;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header img {
            width: 30px;
            height: 30px;
            margin-right: 5px;
        }

        .header .search-bar {
            flex: 1;
            margin: 0 20px;
        }

        .header .search-bar input {
            width: 100%;
            padding: 5px 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .header .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .header .nav-buttons button {
            background-color: #ff6f00;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .header .nav-buttons button:hover {
            background-color: #e65c00;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .product-header {
            display: flex;
            gap: 20px;
        }

        .product-header img {
            width: 60%;
            height: auto;
        }

        .product-details {
            flex: 1;
        }

        .product-title {
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .product-price {
            font-size: 18px;
            color: red;
            margin-bottom: 15px;
        }

        .product-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .product-options span {
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product-options span:hover {
            background-color: #f0f0f0;
        }

        .product-actions {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            color: white;
            background-color: #ff6f00;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #e65c00;
        }

        .additional-info {
            margin-top: 30px;
        }

        .additional-info ul {
            list-style: none;
            padding: 0;
        }

        .additional-info li {
            margin-bottom: 10px;
        }

        .color-options {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 10px;
        }

        .color-options span {
            text-align: center;
            font-size: 14px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .color-options span:hover {
            background-color: #f8f8f8;
        }

        .product-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-details {
            flex: 1;
        }

        .description {
            margin-top: 20px;
        }

        .details-list {
            list-style-type: none;
            padding: 0;
        }

        .details-list li {
            margin-bottom: 5px;
        }

        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <img src="https://via.placeholder.com/30" alt="Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm sản phẩm...">
        </div>
        <div class="nav-buttons">
        <a href="">
            <button>Kênh Bán Hàng</button>
        </a>

            <button>Tải Ứng Dụng</button>
            <button>Kết Nối</button>
            <button>Thông Báo</button>
            <button>Hỗ Trợ</button>
            <button>Tiếng Việt</button>
            <button>bckduc121004</button>
        </div>
    </div>

    <div class="container">
        <div class="product-header">
            <img src="placeholder.png" alt="Lịch Mini 2025">
            <div class="product-details">
                <div class="product-title">Lịch Mini 2025 - Để Bàn Đơn Giản</div>
                <div class="product-price">₫2.190 - ₫10.900</div>
                <div class="product-options">
                    <span>Trắng</span>
                    <span>Đỏ</span>
                    <span>Nâu</span>
                    <span>Xanh Lá</span>
                    <span>Xanh Dương</span>
                </div>
                <div class="product-actions">
                    {{-- <button onclick="window.location.href='{{ route('cart') }}'" class="btn">Thêm Vào Giỏ Hàng</button> --}}
                    <a href="{{ route('cart') }}" class="btn">Thêm vào giỏ hàng</a>
                    <a href="{{ route('order') }}" class="btn">Mua Ngay</a>
                </div>
            </div>
        </div>

        <div class="additional-info">
            <h3>Thông Tin Sản Phẩm</h3>
            <ul>
                <li>Kích thước: 65mm x 75mm</li>
                <li>Chất liệu: Giấy Kraft</li>
                <li>Năm: 2025</li>
            </ul>
        </div>

        <div class="color-options">
            <h3>Chọn Màu Sắc:</h3>
            <span>Màu Trắng</span>
            <span>Màu Đỏ</span>
            <span>Màu Nâu</span>
            <span>Màu Xanh Lá</span>
            <span>Màu Xanh Dương</span>
        </div>
    </div>

    <div class="container">
        <div class="product-info">
            <div class="product-header">
                <h2>2Paint Decor</h2>
                <p>Online 2 Phút Trước</p>
            </div>
            <div class="product-stats">
                <p>Đánh Giá: 110.6k</p>
                <p>Tỉ Lệ Phản Hồi: 96%</p>
                <p>Sản Phẩm: 321</p>
                <p>Thời Gian Phản Hồi: trong vài giờ</p>
            </div>
        </div>

        <div class="product-details">
            <h3>CHI TIẾT SẢN PHẨM</h3>
            <ul class="details-list">
                <li><span class="highlight">Danh Mục:</span> Shopee > Nhà Sách Online > Dụng cụ học sinh & văn phòng > Lịch Các Loại</li>
                <li><span class="highlight">Kho:</span> 2429</li>
                <li><span class="highlight">Tên tổ chức chịu trách nhiệm sản xuất:</span> Nhà máy Jimiao daily</li>
                <li><span class="highlight">Địa chỉ tổ chức chịu trách nhiệm sản xuất:</span> Chiết Giang, Kim Hoa, Trung Quốc</li>
                <li><span class="highlight">Gửi từ:</span> Hà Nội, Việt Nam</li>
                <li><span class="highlight">Quy Cách:</span> Bộ 2</li>
                <li><span class="highlight">Trọng lượng:</span> 50g</li>
            </ul>
        </div>
    </div>
</body>
</html>