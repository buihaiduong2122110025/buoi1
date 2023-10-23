<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng nhập</title>
   <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="../public/css/frontend.css">
   <script src="../public/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
   <section class="bhd-header">
      <div class="container">
         <div class="row">
            <div class="col-6 col-sm-6 col-md-2 py-1">
               <a href="index.html">
                  <img src="../public/images/logo.png" class="img-fluid" alt="Logo">
               </a>
            </div>
            <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm"
                     aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text bg-main" id="basic-addon2">
                     <i class="fa fa-search" aria-hidden="true"></i>
                  </span>
               </div>
            </div>
            <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
               <div class="call-login--register border-bottom">
                  <ul class="nav nav-fills py-0 my-0">
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">
                           <i class="fa fa-phone-square" aria-hidden="true"></i>
                           0981992900
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login.html">Đăng nhập</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="register.html">Đăng ký</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="profile.html">Bùi Hải Dương</a>
                     </li>
                  </ul>
               </div>
               <div class="fs-6 py-2">
                  ĐỔI TRẢ HÀNG HOẶC HOÀN TIỀN <span class="text-main">TRONG 3 NGÀY</span>
               </div>
            </div>
            <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
               <a href="cart.html">
                  <div class="box-cart float-end">
                     <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                     <span>1</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
   <section class="bhd-mainmenu bg-main">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-12">
               <nav class="navbar navbar-expand-lg bg-main">
                  <div class="container-fluid">
                     <a class="navbar-brand d-block d-sm-none text-white" href="index.html">DIENLOISHOP</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                              <a class="nav-link text-white" aria-current="page" href="index.html">Trang chủ</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link text-white" href="post_page.html">Giới thiệu</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Thời trang nam
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item text-main" href="product_category.html">Quần jean nam</a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Áo thun nam </a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Sơ mi nam</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Thời trang nữ
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item text-main" href="product_category.html">Váy</a></li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Đầm</a>
                                 </li>
                                 <li><a class="dropdown-item text-main" href="product_category.html">Sơ mi nữ</a></li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="post_topic.html" class="nav-link text-white">Bài viết</a>
                           </li>
                           <li class="nav-item">
                              <a href="contact.html" class="nav-link text-white">Liên hệ</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </section>
   <section class="bg-light">
      <div class="container">
         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb py-2 my-0">
               <li class="breadcrumb-item">
                  <a class="text-main" href="index.html">Trang chủ</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">
                  Đăng nhập
               </li>
            </ol>
         </nav>
      </div>
   </section>
   <section class="bhd-maincontent py-2">
      <form action="login.html" method="post" name="logincustomer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <p>Để gửi bình luận, liên hệ hay để mua hàng cần phải có tài khoản</p>
               </div>
               <div class="col-md-8">
                  <div class="mb-3">
                     <label for="username" class="text-main">Tên tài khoản (*)</label>
                     <input type="text" name="username" id="username" class="form-control"
                        placeholder="Nhập tài khoản đăng nhập" required>
                  </div>
                  <div class="mb-3">
                     <label for="password" class="text-main">Mật khẩu (*)</label>
                     <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu"
                        required>
                  </div>
                  <div class="mb-3">
                     <button class="btn btn-main" name="LOGIN">Đăng nhập</button>
                  </div>
                  <p><u class="text-main">Chú ý</u>: (*) Thông tin bắt buộc phải nhập</p>
               </div>
            </div>
         </div>
      </form>
   </section>
   <section class="bhd-footer pb-4">
      <div class="container">
         <div class="row">
            <div class="col-md-4 pt-4">
               <h3 class="widgettilte">CHÚNG TÔI LÀ AI ?</h3>
               <p class="pt-1">
                  Copyright@ 2024 DienloiShop là hệ thống bán sĩ và lẽ thời trang nam, nữ, trẻ em và quần áo thể thao,
                  mong muốn đem đến chất lượng tốt nhất cho khách hàng.
               </p>
               <p class="pt-1">
                  Địa chỉ: B216A, KP Bình Phước, Phường Bình Nhâm, TP. Thuận An, Bình Dương
               </p>
               <p class="pt-1">
                  Điện thoại: 0985 608 759(call, zalo) - Email: dienloisoft@gmail.com
               </p>
               <h3 class="widgettilte">MẠNG XÃ HỘI</h3>
               <div class="social my-3">
                  <div class="facebook-icon">
                     <a href="#">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                  </div>
                  <div class="instagram-icon">
                     <a href="#">
                        <i class="fab fa-instagram"></i>
                     </a>
                  </div>
                  <div class="google-icon">
                     <a href="#">
                        <i class="fab fa-google"></i>
                     </a>
                  </div>
                  <div class="youtube-icon">
                     <a href="#">
                        <i class="fab fa-youtube"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 pt-4">
               <h3 class="widgettilte">
                  <strong>Liên hệ</strong>
               </h3>
               <ul class="footer-menu">
                  <li><a href="index.html">Trang chủ</a></li>
                  <li><a href="post_page.html">Giới thiệu</a></li>
                  <li><a href="product.html">Sản phẩm</a></li>
                  <li><a href="post_topic.html">Bài viết</a></li>
                  <li><a href="contact.html">Liên hệ</a></li>
               </ul>
            </div>
            <div class="col-md-4 pt-4 text-end">
               <h3 class="fs-5 text-end">
                  <strong>Lượt truy cập</strong>
               </h3>
               <p class="my-1">9888 lượt</p>
            </div>
         </div>
      </div>
   </section>
   <section class="dhl-copyright bg-dark py-3">
      <div class="container text-center text-white">
         Thiết kế bởi: Trương Thành Đạt - Phone: 0971885850
      </div>
   </section>
</body>

</html>