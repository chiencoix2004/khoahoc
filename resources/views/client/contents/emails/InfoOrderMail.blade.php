 <!DOCTYPE html>
<html>
<head>
    <title>Thanh Toán Thành Công</title>
</head>
<body>
    <h1>Chúc mừng bạn đã thanh toán thành công!</h1>
    <p>Xin chào, cảm ơn bạn đã mua hàng tại Giá Rẻ Học Ngay. Dưới đây là thông tin chi tiết đơn hàng:</p>
    <ul>
        <li><strong>Mã giao dịch:</strong> {{ $transactionID }}</li>
        <li><strong>Tên sản phẩm:</strong> {{ $productName }}</li>
        <li><strong>Tổng tiền:</strong> {{ number_format($total, 0, ',', '.') }} VND</li>
    </ul>
    <p>Nếu bạn có thắc mắc, vui lòng liên hệ qua email: hocngaygiare@gmail.com</p>
    <p><small>Nếu email nằm trong Spam, vui lòng đánh dấu "Không phải spam" để nhận thông báo tốt hơn.</small></p>
    <p>Trân trọng,<br>Đội ngũ Học Ngay Giá Rẻ</p>
</body>
</html>
