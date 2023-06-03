<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trix Visuals | Choose your category</title>
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/test.css">

    <link rel="stylesheet" href="./src/css/splide.min.css">
    <script src="./src/js/splide.min.js" defer></script>

    <script src="./src/js/index.js" defer></script>
    <script src="./src/js/slider.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>



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
    <section class="main_content">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="http://via.placeholder.com/865x435" alt="">
                        <div class="showcase_slider_item_hover">
                            <a href="#">LIVE PREVIEW</a>
                            <a href="#">GITHUB</a>
                        </div>
                        <div class="showcase_slider_item_info">
                            <h2 class="Title">Greenly Landing Page</h2>
                            <h6 class="webdev_category">Full Stack Project</h6>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="http://via.placeholder.com/865x435" alt="">
                        <div class="showcase_slider_item_hover">
                            <a href="#">LIVE PREVIEW</a>
                            <a href="#">GITHUB</a>
                        </div>
                        <div class="showcase_slider_item_info">
                            <h2 class="Title">Greenly Landing Page</h2>
                            <h6 class="webdev_category">Full Stack Project</h6>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="http://via.placeholder.com/865x435" alt="">
                        <div class="showcase_slider_item_hover">
                            <a href="#">LIVE PREVIEW</a>
                            <a href="#">GITHUB</a>
                        </div>
                        <div class="showcase_slider_item_info">
                            <h2 class="Title">Greenly Landing Page</h2>
                            <h6 class="webdev_category">Full Stack Project</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var splide = new Splide('.splide', {
                type: 'loop',
                width: '100%',
                perPage: 3,
                padding: 16
            });
            splide.mount();
        });
    </script>
</body>

</html>