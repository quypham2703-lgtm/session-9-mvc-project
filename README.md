# MVC Project (PHP)

## 1. Giới thiệu

Project này được xây dựng bằng PHP theo mô hình MVC (Model - View - Controller).
Mục đích chính là để hiểu cách tổ chức code và cách một web cơ bản hoạt động.

---

## 2. Cấu trúc thư mục

Project gồm các phần chính:

* app/

  * models: chứa dữ liệu và xử lý dữ liệu
  * controllers: xử lý yêu cầu từ người dùng
  * views: hiển thị giao diện

* core/

  * Router.php: dùng để điều hướng request

* public/

  * index.php: file chạy đầu tiên

---

## 3. Cách chạy project

Bước 1: Copy project vào thư mục htdocs của XAMPP
Ví dụ:
C:\xampp\htdocs\mvc-project

Bước 2: Mở trình duyệt và truy cập:
http://localhost/mvc-project/public/index.php

---

## 4. Cách hoạt động

Khi chạy project, chương trình sẽ đi theo các bước:

* index.php được gọi đầu tiên
* Router xử lý URL và xác định controller cần gọi
* Controller nhận request và gọi Model
* Model trả dữ liệu về cho Controller
* Controller truyền dữ liệu sang View để hiển thị

Ví dụ:
?url=product/index
→ sẽ gọi ProductController và hàm index()

---

## 5. Chức năng hiện tại

* Hiển thị danh sách sản phẩm
* Có router đơn giản để điều hướng
* Áp dụng cấu trúc MVC cơ bản

---

## 6. Hạn chế

* Dữ liệu đang là giả (chưa dùng database)
* Chưa có chức năng thêm, sửa, xóa
* Router còn đơn giản

---

## 7. Hướng phát triển

Trong tương lai có thể bổ sung:

* Kết nối MySQL
* Thêm chức năng CRUD (thêm, sửa, xóa)
* Tự động load file (autoload)
* Xử lý lỗi tốt hơn

---

## 8. Kết luận

Project này giúp hiểu rõ cách chia nhỏ chương trình theo MVC
và cách một request được xử lý từ đầu đến cuối.

---

## 9. Thông tin

* Tên: Phạm Ngọc Quý
* GitHub: https://github.com/quypham2703-lgtm/session-9-mvc-project
