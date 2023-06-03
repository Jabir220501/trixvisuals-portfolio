<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trix Visuals | Choose your category</title>
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/style.css">

    <script src="./src/js/index.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>


</head>

<body>
    <!-- Cursor -->
    <?php
    include("./components/cursor.php")
        ?>

    <!-- Header -->
    <header>
        <?php
        include("./components/header/logo.php")
            ?>
        <div id="category">
            <h3>Choose a category</h3>
        </div>
        <?php
        include("./components/header/menu.php")
            ?>
    </header>
    <!-- Main_Content -->
    <section class="main_content">

        <div class="category_container">
            <h1 class="category"><a href="./web-development">Web Development</a></h1>
            <img src="http://via.placeholder.com/250x125" alt="" class="category_image">
        </div>
        <div class="category_container">
            <h2 class="category"><a href="./photography">Photography</a></h2>
            <img src="http://via.placeholder.com/250x125" alt="" class="category_image">
        </div>

    </section>
</body>

</html>