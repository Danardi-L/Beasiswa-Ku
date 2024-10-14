<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beasiswa ku</title>
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg h-100 h-md-auto">
    <div class="container">
        <a class="navbar-brand text-white" href="index.php"><i class="fa fa-graduation-cap fa-lg mr-2"></i>Beasiswa Ku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nvbCollapse" aria-controls="nvbCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="nvbCollapse">
            <ul class="navbar-nav ml-auto"> <!-- Gunakan ml-auto untuk memindahkan ke kanan -->
                <li class="nav-item pl-1">
                    <a class="nav-link" href="index.php"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
                </li>
                <li class="nav-item active pl-1">
                    <a class="nav-link" href="daftar.php"><i class="fa fa-th-list fa-fw mr-1"></i>Daftar</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link" href="hasil.php"><i class="fa fa-info-circle fa-fw mr-1"></i>Hasil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
        <header class="">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('https://blog.hellocation.id/wp-content/uploads/2024/01/38727.jpg')">
                    </div>
                    <div class="carousel-item" style="background-image: url('https://campuspedia.id/news/wp-content/uploads/2021/03/featured-1.png')">
                    </div>
                    <div class="carousel-item" style="background-image: url('https://kuliahdimana.id/public/news/795192c2579df7674ebffa01095c3840.jpg')">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>
    <?php endif; ?>

</body>

</html>