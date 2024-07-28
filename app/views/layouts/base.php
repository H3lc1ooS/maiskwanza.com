<!DOCTYPE html>

<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">

    <title><?= $this->e($title) ?></title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="/assets/css/root.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/midiaQ.css">
    <link rel="stylesheet" href="/assets/css/animations.css">
    <link rel="stylesheet" href="/assets/css/objects.css">
</head>

<body>
    <?= $this->insert('components/header') ?>

    <main class="container">
        <?= $this->section('content') ?>
    </main>

    <?= $this->insert('components/footer') ?>


    <!-- Script -->
    <script src="assets/js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Smooth Scroll -->
    <script src="assets/js/smoothScroll/jquery.js"></script>
    <script src="assets/js/smoothScroll/jquery.parallax.js"></script>
    <script src="assets/js/smoothScroll/owl.carousel.min.js"></script>
    <script src="assets/js/smoothScroll/custom.js"></script>

    <script src="assets/js/switchView.js"></script>
    <script src="assets/js/lightMode.js"></script>
    <script src="assets/js/order.js"></script>
</body>

<script src="/public/assets/js/smoothScroll/lightMode.js"></script>

</html>