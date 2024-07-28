<?php $this->layout("layouts/admin", ['title' => 'Criar Notícias']); ?>
<form action="/admin/noticias" method="post">
    <textarea name="noticia">
    Teste do Tiny MCE
</textarea>

<button type="submit">Publicar</button>
</form>
</section>