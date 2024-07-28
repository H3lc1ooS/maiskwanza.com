<!-- Header -->
<header class="flex a-center j-between normal-font small-sz">
    <section class="logo-container">
        <a href="">
            <img src="assets/img/logo.svg" alt="Logo do +Kwanza" class="logo">
        </a>
    </section>

    <!-- Destop Navgation -->
    <nav class="navbar menu-desktop hide-mobile flex row j-around a-center">

        <ul class="flex row">
            <li><a href="/" class="page-scroll nav-link" id="btn-home-on">Home</a></li>
            <li><a href="/podcasts" class="page-scroll nav-link">Podcast</a></li>
            <li><a href="/sobre" class="page-scroll nav-link">Sobre nós</a></li>
            <li><a href="/" class="page-scroll nav-link">Contactos</a></li>
        </ul>

    </nav>

    <!-- Mobile Navgation -->
    <section class="hide-desktop">
        <nav class="navbar menu-mobile">
            <li>
                <a href="#" class="flex row" id="menu-icon">
                    <img class="icon-menu" src="assets/img/icon/menu.webp" alt="menu">
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/" class="page-scroll nav-link" id="btn-home-on">Home</a></li>
                    <li><a href="/podcasts" class="page-scroll nav-link">Podcast</a></li>
                    <li><a href="/sobre" class="page-scroll nav-link">Sobre nós</a></li>
                    <li><a href="#contact" class="page-scroll nav-link">Contactos</a></li>
                    <li class=" dackmode-btn ">
                        <label class="switch hide-desktop nav-link">
                            <input type="checkbox" id="darkModeToggle-mobile">
                            <span class="icon-s sun">
                                <ion-icon class="icon" name="moon"></ion-icon> Dark Mode
                            </span>
                            <span class="icon-s moon">
                                <ion-icon class="icon" name="sunny"></ion-icon> Light Mode
                            </span>
                        </label>
                    </li>
                    <li><a href="/newsletters" class=" newsletter-button">Newsletter</a></li>
                </ul>
            </li>
        </nav>
    </section>

    <!-- Darkmode btn -->
    <label class="switch hide-mobile">
        <input type="checkbox" id="darkModeToggle">
        <span class="icon-s sun">
            <ion-icon class="icon" name="moon"></ion-icon>
        </span>
        <span class="icon-s moon">
            <ion-icon class="icon" name="sunny"></ion-icon>
        </span>
    </label>

    <a href="/noticias" class="hide-mobile newsletter-button">Newsletter</a>


</header>