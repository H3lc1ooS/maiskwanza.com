<!-- PodCasts -->
<section id="podcast" class="Podcasts content">
    <section class="title">
        <h1>Podcasts</h1>
        <h2>Últimos episódios</h2>
    </section>

    <section class="Card-Area flex scaleup">
        <?php foreach ($videos as $video) : ?>
            <section>
                <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['snippet']['resourceId']['videoId'] ?>" class="Podcast-Card" target="_blank">
                    <img src="<?php echo $video['snippet']['thumbnails']['standard']['url'] ?>" alt="" class="podcast-img">
                </a>
            </section>
        <?php endforeach; ?>

    </section>

    <section class="podcast-btn flex t-center f-center">
        <a href="/podcasts" class="newsletter-button">Mais vídeos</a>
    </section>
</section>