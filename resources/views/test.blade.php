<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Shopee</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
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
    </style>
</head>
<body>
    <!-- Banner Header -->
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
</body>
</html>
