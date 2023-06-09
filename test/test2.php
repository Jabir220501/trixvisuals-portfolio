<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trix Visuals | Web Development</title>
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/test2.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        .main_content {
            height: 100vh;
            width: 100vw;
        }

        .swiper {
            width: 100%;
            height: 500px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;

        }

        .swiper-slide img {
            display: block;
            width: 800px;
            height: 100%;
            object-fit: cover;
        }

    </style>
</head>

<body>
    <?php
    include("./components/cursor.php")
        ?>
    <section class="content">
        <header>
            <?php
            include("./components/header/logo.php")
                ?>
            <div id="category">
                <h3>Web Development</h3>
            </div>
            <?php
            include("./components/header/menu.php")
                ?>
        </header>
    </section>
    <!-- Swiper -->
    <div class="main_content">


        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
                <div class="swiper-slide"><img src="http://via.placeholder.com/865x435" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 100,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>