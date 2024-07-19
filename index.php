<?php require_once 'controllers/conection.php'; ?>

    <!DOCTYPE html>

    <html lang="pt">
 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" ">

        <title> +Kwanza | Podcast</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icons -->

        <!-- Style -->
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/objects.css">
        <link rel="stylesheet" href="./assets/css/root.css">
        <link rel="stylesheet" href="./assets/css/midiaQ.css">
    </head>

    <body>

        <!-- Header -->
        <header class="flex a-center j-between normal-font small-sz">
            <section class="logo-container">
                <img src="./assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
            </section>

            <!-- Destop Navgation -->
            <nav class="navbar menu-desktop hide-mobile flex row j-around a-center">

                <ul class="flex row">
                    <li><a href="" class="nav-link">Home</a></li>
                    <li><a href="" class="nav-link">Podcast</a></li>
                    <li><a href="" class="nav-link">Sobre nós</a></li>
                    <li><a href="" class="nav-link">Contactos</a></li>
                </ul>

            </nav>

            <!-- Mobile Navgation -->
            <section class="hide-desktop">
                <nav class="navbar menu-mobile">
                    <li>
                        <a href="#" class="flex row" id="menu-icon">
                            <img class="icon-menu" src="./assets/img/icon/menu.webp" alt="menu">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="nav-link">Home</a></li>
                            <li><a href="" class="nav-link">Podcast</a></li>
                            <li><a href="" class="nav-link">Sobre nós</a></li>
                            <li><a href="" class="nav-link">Contactos</a></li>
                        </ul>
                    </li>
                </nav>
            </section>

            <a href="" class="hide-mobile newsletter-button">Newsletter</a>

        </header>

        <!-- Main Content -->
        <main class="container">

            <!-- Hero Section -->
            <section class="hero flex j-between f-center f-width">
                <section class="hero-text flex col j-center">
                    <section class="text">
                        <h1>Informação de qualidade, relevância e valor para o público angolano. Inscreva-se no Youtube.</h1>
                    </section>
                    <section class="flex t-center">
                        <a href="https://www.youtube.com/@maiskwanza" class="newsletter-button" target="_blank">Inscrever-se</a>
                    </section>
                </section>

                <section class="qr-container over-hidden hide-mobile">
                    <img src="./assets/img/QR code.png" alt="qr" class="full">
                </section>
            </section>

            <!-- PodCasts -->
            <section class="Podcasts content">
                <section class="title">
                    <h1>Podcasts</h1>
                    <h2>Últimos episódios</h2>
                </section>
                <section class="Card-Area flex">
                    <?php foreach ($videos['items'] as $video) : ?>
                        <div>
                        <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['snippet']['resourceId']['videoId'] ?>" class="Podcast-Card" target="_blank">
                            <img src="<?php echo $video['snippet']['thumbnails']['standard']['url'] ?>" alt="" class="podcast-img">
                        </a>
                        </div>
                    <?php endforeach; ?>
                </section>
            </section>

            <!-- "Sobre nós"-->

            <section class="sobrenos flex col a-center" id="about_us">
                <section class="Podcast-info flex a-center col t-center f-width">
                    <section class="logo-container">
                        <img src="./assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
                    </section>
                    <p class="text-sobrenos">Where can I get some?
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in </p>
                    <section class="social-links flex row">
                        <a href="https://www.youtube.com/@maiskwanza" class="social-link-card" target="_blank">
                            <img src="./assets/img/icon/logo-youtube.svg" alt="" class="icon">
                            <h1>Youtube</h1>
                        </a>
                        <a href="https://www.instagram.com/mais_kwanza/" class="social-link-card" target="_blank">
                            <img src="./assets/img/icon/logo-instagram.svg" alt="" class="icon">
                            <h1>Instagram</h1>
                        </a>
                        <a href="https://open.spotify.com/user/31uoo2l4ln3wtnaie3bsoetfm5hq?si=7cf32883TWikedHt4gnNoA" class="social-link-card" target="_blank">
                            <img src="./assets/img/icon/logo-spotify.svg" alt="" class="icon">
                            <h1>Spotify</h1>
                        </a>
                    </section>
                    <a href="" class="newsletter-button">
                        <h2>Saber mais</h2>
                    </a>
                </section>
                <section class="Podcast-hosts flex j-around a-center ">
                    <a href="https://www.instagram.com/nuno_baio/" class="host-card sm-Card" target="_blank">
                        <section class="description">
                            <h1>Nuno Baio</h1>
                            <h2>Host</h2>
                        </section>
                    </a>
                    <a href="https://www.instagram.com/vaneza_vonhaffe/" class="host-card sm-Card" target="_blank">
                        <section class="description">
                            <h1>Vaneza Von-Haffe</h1>
                            <h2>Co-Host</h2>
                        </section>
                    </a>
                </section>
            </section>

            <!-- Newsletter -->
            <section class="newsletter content flex col a-center">
                <section class="title">
                    <h1>Newsletter</h1>
                    <h2>Saiba o que está a acontecer no mundo dos negócios</h2>
                </section>
                <section class="newsletter-card-area flex row">
                    <a class="newsletter-card">
                        <h2 class="assunto">Economia</h2>
                        <section class="description">
                            <h1>Os Bancos mais lucrativos em 2023</h1>
                            <h2>Lorem ipsum dolor sit amet consectetur...</h2>
                        </section>
                    </a>
                    <a class="newsletter-card">
                        <h2 class="assunto">Startups</h2>
                        <section class="description">
                            <h1>Conheça a startup vencedora do centro de ivest...</h1>
                            <h2>A xtal é uma startup de Lorem ipsum dolor sit amet consectetur </h2>
                        </section>
                    </a>
                </section>
                <a href="" class="newsletter-button">
                    <h2>Ver mais</h2>
                </a>
            </section>

            <!-- Contactos -->
            <section class="contacts content">
                <section class="title">
                    <h1>Contactos</h1>
                    <h2>Saiba como nos contactar</h2>
                </section>
                <section class="contacts-area flex row j-between a-center ">
                    <section class="contacts-links flex col">
                        <a href="https://www.youtube.com/@maiskwanza" class="social-link-card" target="_blank">
                            <img src="assets/img/icon/logo-youtube.svg" class="icon">
                            <h1>Youtube</h1>
                        </a>
                        <a href="https://www.instagram.com/mais_kwanza/" class="social-link-card" target="_blank">
                            <img src="assets/img/icon/logo-instagram.svg" class="icon">
                            <h1>Instagram</h1>
                        </a>
                        <a href="https://open.spotify.com/user/31uoo2l4ln3wtnaie3bsoetfm5hq?si=7cf32883TWikedHt4gnNoA" class="social-link-card" target="_blank">
                            <img src="assets/img/icon/logo-spotify.svg" class="icon">
                            <h1>Spotify</h1>
                        </a>

                    </section>
                    <img src="assets/img/logo.svg" alt="" srcset="" class="contact-logo">
                </section>
            </section>
        </main>

        <!-- Footer -->
        <footer class="flex col content">
            <section class="footer-container flex row j-around a-center">
                <section class="logo-container">
                    <img src="./assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
                </section>
                <section class="navegacao">
                    <h1>Navegação</h1>
                    <ul class="flex col">
                        <li><a href="#hero" class="nav-link">Home</a></li>
                        <li><a href="#podcasts" class="nav-link">Podcast</a></li>
                        <li><a href="#about-us" class="nav-link">Sobre nós</a></li>
                        <li><a href="#contact" class="nav-link">Contactos</a></li>
                    </ul>
                </section>
                <section class="suporte">
                    <h1>Suporte</h1>
                    <ul>
                        <li>+244 999 999 999</li>
                        <li>+244 222 222 222</li>
                        <li>suport@maiskwanza.com</li>
                        <li></li>
                    </ul>
                </section>
                <section class="newsletter-sub">
                    <h1>Newsletter</h1>
                    <p>Receba as noticias directo no seu email</p>
                    <form action="" class="newsletter-sub-form">
                        <input type="email" placeholder="Seu email">
                        <button type="submit" class=""><img src="assets/img/icon/send.svg" alt="" srcset=""></button>
                    </form>
                </section>
            </section>
            <section class="t-center">
                <p>©+Kwanza All directs reserved</p>
            </section>
        </footer>

        <!-- Script -->
        <script src="./assets/js/index.js"></script>

    </body>

    </html>
