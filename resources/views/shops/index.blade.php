<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #ff5722;
        }

        /* Căn chỉnh phần thông tin shop */
        .shop-info {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .shop-avatar {
            text-align: center;
        }

        .shop-avatar img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .shop-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .shop-description {
            font-size: 1rem;
            color: #555;
            margin-bottom: 10px;
        }

        .shop-info p {
            margin: 5px 0;
            font-size: 0.9rem;
        }

        .shop-info .row div {
            padding: 10px 0;
        }

        .vouchers .voucher-card {
            border-radius: 8px;
            text-align: center;
        }

        .products .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 8px;
        }

        .products .card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }

        html, body {
            height: 100%;
            margin: 0; 
        }

        .wrapper {
            min-height: 100%; 
            display: flex;
            flex-direction: column;
        }

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
    <!-- Header -->
    <header class="bg-danger text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h4">Toy's Shop</h1>
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm..." class="form-control d-inline-block" style="width: 300px;">
                <button class="btn btn-light">Tìm kiếm</button>
            </div>
            <div class="user-menu">                
                @if (auth()->check())
                    <a href="{{ route('cart') }}" class="btn btn-warning">Giỏ hàng</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-warning">Giỏ hàng</a>
                @endif
                <button class="btn btn-light" onclick="window.location.href='{{ route('login') }}'">Đăng nhập</button>
                <button class="btn btn-light" onclick="window.location.href='{{ route('signup') }}'">Đăng ký</button>
            </div>
        </div>
    </header>

    <section class="shop-info container my-4">
        <div class="row align-items-center">
            <!-- Shop Avatar -->
            <div class="col-md-3 text-center">
                <div class="shop-avatar bg-light p-3">
                    <img src="https://via.placeholder.com/100" alt="Shop Avatar" class="img-fluid rounded-circle">
                    <p class="mt-2">Shop Avatar</p>
                </div>
            </div>
            <!-- Shop Details -->
            <div class="col-md-9">
                <h2 class="shop-name">Shop Name</h2>
                <p class="shop-description">Shop Description</p>
                <p class="text-muted">Tham gia: <strong>34 tháng trước</strong></p>
                <div class="row">
                    <div class="col-md-6">
                        <p>Sản phẩm: <strong>30</strong></p>
                        <p>Đánh giá: <strong>4.8</strong> (2k Đánh giá)</p>
                    </div>
                    <div class="col-md-6">
                        <p>Người theo dõi: <strong>2.5k</strong></p>
                        <p>Tỉ lệ phản hồi chat: <strong>99%</strong> (Trong vài giờ)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <!-- Product Section -->
    <section class="products py-4">
        <div class="container">
            <h4 class="mb-4">Gợi ý cho bạn</h4>
            <div class="row">
                <!-- Product Card -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Giá: 100.000đ</p>
                            <button class="btn btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Giá: 150.000đ</p>
                            <button class="btn btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 3</h5>
                            <p class="card-text">Giá: 200.000đ</p>
                            <button class="btn btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 4</h5>
                            <p class="card-text">Giá: 250.000đ</p>
                            <button class="btn btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-3 text-center">
        <p>&copy; Copyright by </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
