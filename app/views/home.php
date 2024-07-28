<?php $this->layout("layouts/base", ['title' => '+Kwanza | Home']); ?>

<!-- Hero -->
<?= $this->insert('components/hero') ?>

<!-- Podcasts -->
<?= $this->insert('components/podcasts-home', ['videos' => $videos]) ?>

<!-- "Sobre nós"-->
<?= $this->insert('components/sobre') ?>

<!-- Newsletter -->
<?= $this->insert('components/noticias-home') ?>

<!-- Contactos -->
<?= $this->insert('components/contactos') ?>