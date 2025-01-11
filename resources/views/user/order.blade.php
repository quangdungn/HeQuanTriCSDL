<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thanh Toán Sản Phẩm</title>
  <style>
    /* Global Styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    .container {
      max-width: 900px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .section {
      margin-bottom: 20px;
    }

    .section-title {
      font-size: 18px;
      margin-bottom: 10px;
      font-weight: bold;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"], textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    textarea {
      resize: none;
    }

    /* Order Details */
    .order-summary {
      border-top: 1px solid #ddd;
      padding-top: 10px;
    }

    .order-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .total {
      font-size: 16px;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
    }

    /* Payment Methods */
    .payment-method {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .payment-method input {
      margin-right: 10px;
    }

    .payment-method label {
      font-size: 14px;
    }

    /* Buttons */
    .button {
      text-align: center;
      margin-top: 20px;
    }

    .button button {
      padding: 12px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      background-color: #ff5722;
      color: white;
      transition: background-color 0.3s ease;
    }

    .button button:hover {
      background-color: #e64a19;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Thanh Toán</h1>

    <!-- Thông Tin Người Nhận -->
    <div class="section">
      <div class="section-title">Thông Tin Người Nhận</div>
      <label for="name">Họ và Tên</label>
      <input type="text" id="name" placeholder="Nhập họ và tên">

      <label for="phone">Số Điện Thoại</label>
      <input type="text" id="phone" placeholder="Nhập số điện thoại">

      <label for="address">Địa Chỉ Nhận Hàng</label>
      <textarea id="address" rows="3" placeholder="Nhập địa chỉ nhận hàng"></textarea>
    </div>

    <!-- Chi Tiết Đơn Hàng -->
    <div class="section">
      <div class="section-title">Chi Tiết Đơn Hàng</div>
      <div class="order-summary">
        <div class="order-item">
          <span>Lịch Mini 2025 - Để Bàn Đơn Giản (x1)</span>
          <span>₫10.900</span>
        </div>
        <div class="order-item">
          <span>Phí Vận Chuyển</span>
          <span>₫15.000</span>
        </div>
        <div class="total">
          <span>Tổng Thanh Toán</span>
          <span>₫25.900</span>
        </div>
      </div>
    </div>

    <!-- Phương Thức Thanh Toán -->
    <div class="section">
      <div class="section-title">Phương Thức Thanh Toán</div>
      <div class="payment-method">
        <input type="radio" id="cod" name="payment" checked>
        <label for="cod">Thanh Toán Khi Nhận Hàng (COD)</label>
      </div>
      <div class="payment-method">
        <input type="radio" id="credit-card" name="payment">
        <label for="credit-card">Thẻ Tín Dụng/Thẻ Ghi Nợ</label>
      </div>
      <div class="payment-method">
        <input type="radio" id="e-wallet" name="payment">
        <label for="e-wallet">Ví Điện Tử (Momo, ZaloPay...)</label>
      </div>
    </div>

    <!-- Nút Xác Nhận -->
    <div class="button">
      <button onclick=" window.location.href='{{ route('home') }}'">Xác nhận thanh toán</button>
    </div>
  </div>
</body>
</html>
