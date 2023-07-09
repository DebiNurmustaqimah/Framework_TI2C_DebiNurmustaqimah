<!DOCTYPE html>
<html lang="en">

<head>
    <title>Client Carousel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">

    <style>
        .carousel {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .carousel-item {
            display: none;
            text-align: center;
        }

        .carousel-item.active {
            display: block;
        }

        .carousel-img {
            border-radius: 50%;
            max-width: 200px;
            max-height: 200px;
        }

        .carousel-caption {
            margin-top: 10px;
        }

        }
    </style>
</head>

<body>
    <div id="client-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#client-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#client-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#client-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel">
            <div class="carousel-item active">
                <img src="../img/user.png" alt="Gambar 1" class="carousel-img">
                <div class="carousel-caption">Caption untuk Gambar 1</div>
            </div>
            <div class="carousel-item">
                <img src="../img/user.png" alt="Gambar 2" class="carousel-img">
                <div class="carousel-caption">Caption untuk Gambar 2</div>
            </div>
            <div class="carousel-item">
                <img src="../img/user.png" alt="Gambar 3" class="carousel-img">
                <div class="carousel-caption">Caption untuk Gambar 3</div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#client-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#client-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
