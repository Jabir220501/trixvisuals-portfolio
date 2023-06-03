<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trix Visuals | Choose your category</title>
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/web-development.css">

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
        <div id="showcase_slider">
            <div class="showcase_slider_item">
                <img src="http://via.placeholder.com/865x435" alt="">
                <div class="showcase_slider_item_hover">
                    <a href="#">LIVE PREVIEW</a>
                    <a href="#">GITHUB</a>
                </div>
                <div class="showcase_slider_item_info">
                    <h2 class="Title">Greenly Landing Page</h2>
                    <h6 class="webdev_category">Full Stack Project</h6>
                </div>
            </div>
            <div class="showcase_slider_item active">
                <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80"
                    alt="">
                <div class="showcase_slider_item_hover">
                    <a href="#">LIVE PREVIEW</a>
                    <a href="#">GITHUB</a>
                </div>
                <div class="showcase_slider_item_info">
                    <h2 class="Title">Greenly Landing Page</h2>
                    <h6 class="webdev_category">Full Stack Project</h6>
                </div>
            </div>
            <div class="showcase_slider_item">
                <img src="http://via.placeholder.com/865x435" alt="">
                <div class="showcase_slider_item_hover">
                    <a href="#">LIVE PREVIEW</a>
                    <a href="#">GITHUB</a>
                </div>
                <div class="showcase_slider_item_info">
                    <h2 class="Title">Greenly Landing Page</h2>
                    <h6 class="webdev_category">Full Stack Project</h6>
                </div>
            </div>
        </div>
        <div id="showcase_slider_nav">
            <div class="showcase_slider_nav_prev">
            </div>
            <div id="showcase_slider_nav_indicator">
                <div class="showcase_slider_nav_dot"></div>
                <div class="showcase_slider_nav_dot active">aa</div>
                <div class="showcase_slider_nav_dot"></div>
            </div>
            <div class="showcase_slider_nav_next"></div>
        </div>
    </section>
</body>

</html>