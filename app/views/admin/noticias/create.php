<?php $this->layout("layouts/admin", ['title' => 'Criar Notícias']); ?>

<form action="/admin/noticias" method="post">
    <select name="categorias">
        <option selected>Categorias</option>
        <option value="3">Finanças</option>
        <option value="1">Marketing</option>
    </select>

    <textarea name="noticia"></textarea>

    
    <button type="submit">Publicar</button>
</form>
</section>