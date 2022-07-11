<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://localhost/public/images/logo.png">
    <title>Trang Chủ</title>
    <base href="http://localhost/">
    <link rel="stylesheet" type="text/css" href="http://localhost/public/css/main.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/public/css/slick.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/public/css/slick-theme.css">
    <!-- Boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <header class="header fixed-top">
        <!-- Top header -->
        <div class="top-header d-none d-lg-block">
            <div class="d-flex justify-content-between p-2 bg-success text-white text-uppercase">
                <div class="d-flex gap-3">
                    <div>Chi nhánh</div>
                    <div>Theo dõi đơn hàng</div>
                </div>
                <div>không ngại va chạm</div>
                <div class="d-flex gap-3">
                    <div>Liên hệ</div>
                    +84 9999999999
                </div>
            </div>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- test -->
                <div class="collapse navbar-collapse navbar-collapse-1">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cửa Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản Phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                    </ul>
                </div>
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="http://localhost/public/images/logo-b.png" alt="">
                </a>
                <!-- Navbar right -->
                <div class="navbar-right">
                    <ul class="d-flex navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#">
                                <i class="bi bi-search"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a tabindex="0" class="nav-link fs-4" href="#" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" title="Popover title" data-bs-content="Here's some amazing content.">
                                <i class="bi bi-person-fill"></i>
                            </a>
                        </li>
                        <!-- Yêu thích -->
                        <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link fs-4" href="#">
                                <i class="bi bi-suit-heart position-relative">
                                    <span
                                        class="position-absolute bottom-0 start-100 translate-middle badge rounded-pill bg-black fw-normal"
                                        style="font-size: 10px;">
                                        2
                                    </span>
                                </i>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a tabindex="0" class="nav-link fs-4" href="#" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" title="Popover title" data-bs-content="Here's some amazing content.">
                                <i class="bi bi-cart position-relative">
                                    <span class="position-absolute bottom-0 start-100 translate-middle badge rounded-pill bg-black fw-normal" style="font-size: 10px;">
                                        1
                                    </span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Navbar menu -->
                <div class="collapse navbar-collapse navbar-collapse-2" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cửa Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản Phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item muti-nav">
                            <div class="box-1">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-person-fill"></i> Đăng Nhập
                                </a>
                            </div>
                            |
                            <div class="box-2">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-shield-lock-fill"></i> Đăng Ký
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>