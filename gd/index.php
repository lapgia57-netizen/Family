<?php
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nền Tảng Gia Đình - Xây dựng hạnh phúc bền vững</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #d35400;
            --secondary: #e67e22;
            --light: #fdf2e8;
        }
        body { font-family: 'Segoe UI', sans-serif; background: #f8f9fa; }
        .hero {
            background: linear-gradient(rgba(211,84,0,0.8), rgba(230,126,34,0.9)), url('https://images.unsplash.com/photo-1511895233-1f0e1e8dc9df?ixlib=rb-4.0.3&auto=format&fit=crop&q=1350') center/cover no-repeat;
            color: white;
            padding: 150px 0 100px;
        }
        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(211,84,0,0.2);
            transition: all 0.3s;
        }
        footer { background: #2c3e50; color: #ecf0f1; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#"><i class="bi bi-heart-fill text-danger"></i> Nền Tảng Gia Đình</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="#gioithieu">Giới thiệu</a></li>
                <li class="nav-item"><a class="nav-link" href="#giatri">Giá trị cốt lõi</a></li>
                <li class="nav-item"><a class="nav-link" href="#hoatdong">Hoạt động</a></li>
                <li class="nav-item"><a class="nav-link" href="#lienhe">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Xây Dựng Gia Đình Hạnh Phúc <i class="bi bi-heart-fill"></i></h1>
        <p class="lead mb-5">Nơi nuôi dưỡng tình yêu thương, sự thấu hiểu và trách nhiệm – nền tảng vững chắc cho một gia đình bền vững</p>
        <a href="#gioithieu" class="btn btn-light btn-lg px-5">Tìm hiểu thêm</a>
    </div>
</section>

<!-- Giới thiệu -->
<section id="gioithieu" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" class="img-fluid rounded shadow" alt="Gia đình hạnh phúc">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold text-primary mb-4">Nền Tảng Gia Đình Là Gì?</h2>
                <p class="text-muted">Nền tảng gia đình là những giá trị cốt lõi giúp hôn nhân và gia đình trở nên vững chắc: tình yêu thương, sự tôn trọng, trách nhiệm, trung thành và đức tin.</p>
                <p class="text-muted">Chúng tôi đồng hành cùng các cặp đôi và gia đình qua các khóa học, tư vấn, hội thảo nhằm xây dựng một mái ấm hạnh phúc và bền vững cho thế hệ hôm nay và mai sau.</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Hơn 10 năm kinh nghiệm tư vấn hôn nhân gia đình</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Hơn 5.000 cặp đôi đã tham gia</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Đội ngũ chuyên gia tâm lý & mục tử tận tâm</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Giá trị cốt lõi -->
<section id="giatri" class="py-5" style="background: var(--light);">
    <div class="container">
        <h2 class="text-center fw-bold mb-5" style="color: var(--primary);">4 Giá Trị Cốt Lõi</h2>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div class="card-body">
                        <i class="bi bi-heart-fill feature-icon mb-3"></i>
                        <h5>Tình Yêu Thương</h5>
                        <p class="text-muted">Yêu thương vô điều kiện là nền tảng của mọi mối quan hệ gia đình.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div class="card-body">
                        <i class="bi bi-people-fill feature-icon mb-3"></i>
                        <h5>Thấu Hiểu & Tôn Trọng</h5>
                        <p class="text-muted">Lắng nghe và trân trọng sự khác biệt của nhau.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div class="card-body">
                        <i class="bi bi-shield-check feature-icon mb-3"></i>
                        <h5>Trách Nhiệm & Trung Thành</h5>
                        <p class="text-muted">Giữ lời hứa và cùng nhau vượt qua khó khăn.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div class="card-body">
                        <i class="bi bi-lightbulb-fill feature-icon mb-3"></i>
                        <h5>Đức Tin & Hy Vọng</h5>
                        <p class="text-muted">Niềm tin vào Chúa và vào nhau là nguồn sức mạnh lớn nhất.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hoạt động nổi bật -->
<section id="hoatdong" class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center fw-bold mb-5 text-primary">Các Hoạt Động Nổi Bật</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2b12e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600" class="card-img-top" alt="Khóa học tiền hôn nhân">
                    <div class="card-body">
                        <h5>Khóa Học Tiền Hôn Nhân</h5>
                        <p>8 buổi học giúp các cặp đôi chuẩn bị tốt nhất cho đời sống hôn nhân.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow">
                    <img src="https://images.unsplash.com/photo-1511632765794-f9e9d23b8e84?ixlib=rb-4.0.3&auto=format&fit=crop&w=600" class="card-img-top" alt="Tư vấn gia đình">
                    <div class="card-body">
                        <h5>Tư Vấn Hôn Nhân Gia Đình</h5>
                        <p>Hỗ trợ 1-1 với các chuyên gia tâm lý và mục tử giàu kinh nghiệm.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow">
                    <img src="https://images.unsplash.com/photo-1544027993-37dbfe43562a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600" class="card-img-top" alt="Hội thảo">
                    <div class="card-body">
                        <h5>Hội Thảo & Retreat Gia Đình</h5>
                        <p>Các chương trình cuối tuần giúp tái kết nối và làm mới tình yêu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Liên hệ -->
<section id="lienhe" class="py-5" style="background: var(--primary); color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4">Bạn Sẵn Sàng Xây Dựng Một Gia Đình Hạnh Phúc?</h2>
                <p class="lead mb-4">Hãy liên hệ với chúng tôi ngay hôm nay!</p>
                <a href="mailto:info@nentanggiadinh.vn" class="btn btn-light btn-lg me-3">Gửi Email</a>
                <a href="tel:0909123456" class="btn btn-outline-light btn-lg">Gọi 0909.123.456</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-5">
    <div class="container text-center">
        <p>&copy; 2025 Nền Tảng Gia Đình. Tất cả quyền được bảo lưu.</p>
        <p>Địa chỉ: 123 Đường Hạnh Phúc, Q. Tân Bình, TP.HCM | Email: info@nentanggiadinh.vn</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
