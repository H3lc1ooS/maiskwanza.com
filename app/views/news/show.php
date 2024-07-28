<?php $this->layout("layouts/base", ['title' => '+Kwanza | Notícias']); ?>

<section class="newsletter-hero flex col">
    <section class="title">
        <h1>Newsletter</h1>
        <h2>Ultimas notícias</h2>
    </section>
    <section class="pesquisa-filtros-container flex row j-between">
        <form action="" method="get" class="search-form flex">
            <input type="text" placeholder="Digite para procurar">
            <button type="submit"><img src="./assets/img/icon/arrow-forward.svg" alt=""></button>
        </form>
        <section class="filters flex">
            <a href="" class="ative">Tudo</a>
            <a href="">Negócios</a>
            <a href="">Finanças</a>
            <a href="">Mercado</a>
            <a href="">Inovação</a>
            <a href="">Podcast</a>
        </section>
    </section>
</section>