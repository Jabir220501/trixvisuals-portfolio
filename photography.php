<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trix Visuals | Photography</title>
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/photography.css">

    <script src="./src/js/index.js" defer></script>
    <script src="./src/js/photo-grid.js" defer></script>

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
                <h3>Photography</h3>
            </div>
            <?php
            include("./components/header/menu.php")
                ?>
        </header>
    </section>
    <div class="main_content">
        <div class="slider-wrapper showcase-gallery">
            <div class="slider slider-one">
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
            </div>
            <div class="slider slider-two">
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
            </div>
            <div class="slider slider-three">
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
            </div>
            <div class="slider slider-four">
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
                <div class="section-image">
                    <img src="http://clapat.ro/themes/serano/images/05hero.jpg" class="item-image" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>