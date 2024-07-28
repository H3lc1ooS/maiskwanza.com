<?php

namespace app\controllers;

class AdminController
{
    public function index()
    {
        return Controller::view('/admin/index');
    }

    public function createNoticia()
    {
        return Controller::view('/admin/noticias/create');
    }

    public function createCategorias()
    {
        return Controller::view('/admin/categoria/create');
    }

    public function store()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
