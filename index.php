<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Demo Site</title>
    <!-- OGP -->
    <meta property="og:url" content="https://sugimoto-gallery-demo-site.netlify.app">
    <meta propety="og:type" content="website">
    <meta propety="og:title" content="Gallery Demo Site">
    <meta propety="og:description" content="ギャラリーサイトのデモサイトです。">
    <meta propety="og:image" content="https://sugimoto-gallery-demo-site/img/HatchfulExport-All/facebook_profile_image.png">
    <!-- ファビコン  -->
    <link rel="icon" type="image/png" href="./img/HatchfulExport-All/favicon.png">
    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://unpkg.com/destyle.css@3.0.2/destyle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class="header">
        <!-- .container -->
        <div class="container">
            <!-- .header-logo -->
            <h1 class="header-logo">
                <img src="./img/HatchfulExport-All/logo_transparent.png" alt="ギャラリーサイトロゴ画像">
            </h1>
            <!-- .haeder-nav-list -->
            <nav class="header-nav-list">
                <!-- .nav-list -->
                <ul class="nav-list">
                    <li class="nav-item"><a href="#">Works</a></li>
                    <li class="nav-item"><a href="#">About</a></li>
                    <li class="nav-item"><a href="#">Contact</a></li>
                    <p>ドロワー見本</p>
                </ul>
                <!-- / . nav-list -->
            </nav>
            <!-- / .header-nav-list -->

            <button class="btn btn-open"><span></span></button>
        </div>
        <!-- / .container -->
    </header>
    <div class="mv">
        <img src="./img/mv.jpg" alt="メインビジュアル">
    </div>
    <main>
        <section class="works section">
            <!-- .container -->
            <div class="container">
                <h2 class="section-title">Works</h2>
                <!-- works-content -->
                <div class="works-content">
                    <ul class="works-list js-list">
                        <?php
                            $count = 1;
                        while($count == 50): ?>
                        <li class="works-item js-item"><img src="https://picsum.photos/200/300?random=<?php echo $count; $count++ ?>" alt=""></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <!-- / .works-content -->
            </div>
        </section>
    </main>


    <!-- モーダルウィンドウ実装-->

    <div class="modal-overlay">
        <div class="modal-img-box">
            <span></span>
            <img src="" alt="" id="popup">
        </div>
    </div>
    <!-- / .モーダルウィンドウ実装-->

    <!-- Topへ戻る -->
    <p id="page-top"><a href="#"><i class="fa-solid fa-angles-up"></i></a></p>
    <!-- /. Topへ戻る -->
    <footer>
        <p class="copy-right"><small>&copy; 2022 Sugimoto Atushi Gallery Demo Site</small></p>
    </footer>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e6e1cd3731.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Main JS -->
    <script src="./js/main.js"></script>
</body>

</html>