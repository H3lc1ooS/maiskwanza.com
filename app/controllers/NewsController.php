<?php

namespace app\controllers;

use app\database\models\Noticia;

class NewsController
{
    public function show()
    {
        $noticia = new Noticia;
        $noticia->fetch();
        return Controller::view('/news/show');

    }

    public function store()
    {
        return dump($_POST);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
