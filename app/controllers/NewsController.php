<?php

namespace app\controllers;

class NewsController
{
    public function show()
    {
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
