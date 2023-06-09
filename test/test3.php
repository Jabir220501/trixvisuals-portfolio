<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/global.css">
    <title>Document</title>
    <style>
        .main_content {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .wrap {
            position: relative;
            width: 100%;
        }

        .window {
            position: relative;
            background: #222;
        }

        #carousel {
            width: 10000px;
            position: relative;
            top: 0;
            left: -450px;
        }

        .slide {
            width: clamp(15.625rem, 7.9375rem + 38.4375vw, 54.0625rem);
            height: clamp(7.8125rem, 3.9375rem + 19.375vw, 27.1875rem);
            cursor: pointer;
            float: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .slide#b1 {
            background: #556270;
        }

        .slide#b2 {
            background: #4ecdc4;
        }

        .slide#b3 {
            background: #9ce462;
        }

        .slide#b4 {
            background: #ff6b6b;
        }

        .slide#b5 {
            background: #c44d33;
        }

        #prev,
        #next {
            cursor: pointer;
            position: absolute;
            bottom: -40px;
            font-size: 14pt;
        }

        #prev {
            left: 0;
        }

        #next {
            right: 0;
        }

        .transition {
            transition: 0.7s;
        }
    </style>
</head>

<body>
    <?php
    include("../components/cursor.php")
        ?>
    <section class="content">
        <header>
            <?php
            include("../components/header/logo.php")
                ?>
            <div id="category">
                <h3>Web Development</h3>
            </div>
            <?php
            include("../components/header/menu.php")
                ?>
        </header>
    </section>
    <section class="main_content">
        <div class="wrap">

            <div id="carousel">
                <span class="slide" id="b1">SLIDE-1</span>
                <span class="slide" id="b2">SLIDE-2</span>
                <span class="slide" id="b3">SLIDE-3</span>
                <span class="slide" id="b4">SLIDE-4</span>
                <span class="slide" id="b5">SLIDE-5</span>
            </div>

            <span id="prev">PREV</span>
            <span id="next">NEXT</span>
        </div>
    </section>

    <script>
        var carousel = document.querySelector('#carousel');
        var threshold = 150;
        var slideWidth = document.querySelector('.slide').clientWidth;
        var dragStart, dragEnd;

        document.querySelector('#next').addEventListener('click', function () {
            shiftSlide(-1);
        });

        document.querySelector('#prev').addEventListener('click', function () {
            shiftSlide(1);
        });

        carousel.addEventListener('mousedown', function (event) {
            if (carousel.classList.contains('transition')) return;
            dragStart = event.pageX;
            this.addEventListener('mousemove', dragMove);
            document.addEventListener('mouseup', dragEndHandler);
        });

        function dragMove(event) {
            dragEnd = event.pageX;
            carousel.style.transform = 'translateX(' + dragPos() + 'px)';
        }

        function dragPos() {
            return dragEnd - dragStart;
        }

        function dragEndHandler() {
            if (dragPos() > threshold) {
                return shiftSlide(1);
            }
            if (dragPos() < -threshold) {
                return shiftSlide(-1);
            }
            shiftSlide(0);
            carousel.removeEventListener('mousemove', dragMove);
            document.removeEventListener('mouseup', dragEndHandler);
        }

        function shiftSlide(direction) {
            if (carousel.classList.contains('transition')) return;
            dragEnd = dragStart;
            document.removeEventListener('mouseup', dragEndHandler);
            carousel.removeEventListener('mousemove', dragMove);
            carousel.classList.add('transition');
            carousel.style.transform = 'translateX(' + (direction * slideWidth) + 'px)';
            setTimeout(function () {
                if (direction === 1) {
                    carousel.insertBefore(carousel.lastElementChild, carousel.firstElementChild);
                } else if (direction === -1) {
                    carousel.appendChild(carousel.firstElementChild);
                }
                carousel.classList.remove('transition');
                carousel.style.transform = 'translateX(0px)';
            }, 700);
        }
    </script>
</body>

</html>