<!DOCTYPE html>
<html>
    <head>
        <title>Form Nhập</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="StyleSheet" type="text/css" href="css/form.css"/>
    </head>
    <body>
        <form class="form-nhap">
            <label class="newrow">Họ tên:</label>
            <input type="text" id="name" name="name" class="require" placeholder="Họ tên">
            <span id="err_name" class="err_notification"></span></br>
            <label class="newrow"> Địa chỉ:</label>
            <input type="text" id="address" name="address" placeholder="Địa chỉ">
            <span id="err_address" class="err_notification"></span></br>
            <label class="newrow">Giới tính:</label>
            <input type="radio" name="breed" id="male" checked="checked">Nam
            <input type="radio" name="breed" id="female">Nữ
            <span></span></br>
            <label class="newrow">Ngày sinh:</label>
            <input type="text" id="dob" name="dob" class="require" placeholder="dd/mm/yyyy">
            <span id="err_dob" class="err_notification"></span></br>
            <label class="newrow">Email:</label>
            <input type="text" id="email" name="email" class="require" placeholder="Email">
            <span id="err_email" class="err_notification"></span></br>
            <label class="newrow">Điện thoại:</label>
            <input type="text" id="phone" name="phone" class="rewuire" placeholder="Điện thoại">
            <span id="err_phone" class="err_notification"></span></br>
            <label class="newrow">Khóa đăng ký:</label>
            <input type="checkbox" id="english" name="english">Tiếng Anh
            <input type="checkbox" id="management" name="management">Quản trị
            <input type="checkbox" id="it" name="it">CNTT
            <span></span></br>
            <label class="newrow">Tên sử dụng:</label>
            <input type="text" id="username" name="username" class="require" placeholder="Username">
            <span id="err_username" class="err_notification"></span></br>
            <label class="newrow">Mật khẩu:</label>
            <input type="password" id="password" name="password" class="require"placeholder="Password">
            <span id="err_password" class="err_notification"></span></br>
            <label class="newrow">Gõ lại mật khẩu:</label>
            <input type="password" id="repassword" name="repassword" class="require"placeholder="Repassword">
            <span id="err_repassword" class="err_notification"></span></br>
            <label class="newrow">Ghi chú:</label>
            <textarea id="note" name="note"></textarea>
            <span></span></br>
            <label class="newrow">&nbsp;</label>
            <input type="button" id="submit" value="Chấp nhận">
            <input type="button" id="ignore" value="Bỏ qua"></br>
        </form>
        <script type="text/javascript" src="js/form.js"></script>
    </body>
</html>