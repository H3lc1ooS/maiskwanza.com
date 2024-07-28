<?php $this->layout("layouts/admin", ['title' => '+Kwanza | Root']); ?>

<?= $this->insert('components/admin/dashboard') ?>
<?= $this->insert('components/admin/stats-cards') ?>

<section class="action-card-area content flex row f-center">

    <section class="action-card">
        <ion-icon name="newspaper"></ion-icon>
        <a href="/admin/create/noticia" class="stat-description">
            <h2>Publicar Notícia</h2>
        </a>
    </section>

    <section class="action-card">
        <ion-icon name="bookmarks-sharp"></ion-icon>
        <a href="/admin/create/categoria" class="stat-description">
            <h2>Criar Categoria</h2>
        </a>
    </section>

    <section class="action-card">
        <ion-icon name="people-sharp"></ion-icon>
        <a href="/admin/subscritos" class="stat-description">
            <h2>Utilizadores</h2>
        </a>
    </section>
</section>