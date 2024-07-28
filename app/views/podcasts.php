<?php $this->layout("layouts/base", ['title' => '+Kwanza | Podcasts']);
function showViews($videoId, $refArray)
{
    foreach ($refArray as $index => $videoStat) {
        if ($videoId == $videoStat['id']) {
            return $refArray[$index]['views'];
            break;
        }
    }
}
?>

<!-- Podcasts -->
<section class="newsletter-hero flex col">
    <section class="title">
        <h1>Podcast</h1>
        <h2>Veja os ultimos episódios</h2>
    </section>
    <section class="order-views-container container flex row j-between">
        <select name="order" id="order" class="order">
            <option id="recente" value="1">Mais recentes</option>
            <option id="popular" value="2">Popularidade</option>
            <option id="antigo" value="3">Mais antigos</option>
        </select>
        <section class="views flex row hide-mobile">
            <a class="ative " id="list-view"><ion-icon name="list"></ion-icon></a>
            <a class="" id="grid-view"><ion-icon name="grid"></ion-icon></a>
        </section>
    </section>
</section>

<section class="view-main content flex  col a-center">

    <section class="view-wrap list-view" id="view-wrap">

        <!-- Apresentar pelo mais recente -->

        <section class="mais-recente" id="maisr">
            <?php foreach ($videos as $video) : ?>
                <section class="view-item">
                    <img src="<?php echo $video['snippet']['thumbnails']['standard']['url'] ?>" alt="" class="thumbnail">
                    <section class="view-content flex col j-between">
                        <h1><?php echo $video['snippet']['title'] ?></h1>
                        <a href="" class="canallink">+Kwanza</a>
                        <p><?php echo $video['snippet']['description'] ?></p>
                        <p></p>
                        <h2><?php echo date("d-m-Y", strtotime($video['snippet']['publishedAt'])); ?> | <?php echo showViews($video['snippet']['resourceId']['videoId'], $videosStat); ?> visualizações</h2>
                    </section>
                    <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['snippet']['resourceId']['videoId'] ?>" target="_blank" class="play-icon"><img src="./assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                </section>
            <?php endforeach; ?>
        </section>

        <!-- Apresentar por views -->
        <section class="popularidade off" id="maisp">
            <?php foreach ($videosStat as $video) : ?>
                <section class="view-item">
                    <img src="<?php echo $video['conteudo']['thumbnails']['standard']['url'] ?>" alt="" class="thumbnail">
                    <section class="view-content flex col j-between">
                        <h1><?php echo $video['conteudo']['title'] ?></h1>
                        <a href="" class="canallink">+Kwanza</a>
                        <p><?php echo $video['conteudo']['description'] ?></p>
                        <p></p>
                        <h2><?php echo date("d-m-Y", strtotime($video['conteudo']['publishedAt'])); ?> | <?php echo showViews($video['conteudo']['resourceId']['videoId'], $videosStat); ?> visualizações</h2>
                    </section>
                    <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['conteudo']['resourceId']['videoId'] ?>" target="_blank" class="play-icon"><img src="./assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                </section>
            <?php endforeach; ?>
        </section>

        <!-- Apresentar pelo mais antigo -->
        <section class="mais-antigo off" id="maisa">
            <?php foreach ($oldestVideos as $video) : ?>
                <section class="view-item">
                    <img src="<?php echo $video['snippet']['thumbnails']['standard']['url'] ?>" alt="" class="thumbnail">
                    <section class="view-content flex col j-between">
                        <h1><?php echo $video['snippet']['title'] ?></h1>
                        <a href="" class="canallink">+Kwanza</a>
                        <p><?php echo $video['snippet']['description'] ?></p>
                        <p></p>
                        <h2><?php echo date("d-m-Y", strtotime($video['snippet']['publishedAt'])); ?> | <?php echo showViews($video['snippet']['resourceId']['videoId'], $videosStat); ?> visualizações</h2>
                    </section>
                    <a href="<?php echo 'https://www.youtube.com/watch?v=' . $video['snippet']['resourceId']['videoId'] ?>" target="_blank" class="play-icon"><img src="./assets/img/icon/play-icon.svg" alt="" srcset=""></a>
                </section>
            <?php endforeach; ?>
        </section>

    </section>
</section>