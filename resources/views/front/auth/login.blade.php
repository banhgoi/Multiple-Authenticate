<!DOCTYPE html>
<html>
<head>
    <title>Customer Login</title>
</head>
<body>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h1>Khách hàng đăng nhập</h1>
    <input type="text" name="email" placeholder="Nhập địa chỉ email">
    <input type="password" name="password" placeholder="Nhập mật khẩu">
    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>

