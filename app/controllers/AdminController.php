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

    public function createCategoria()
    {
        return Controller::view('/admin/categoria/create');
    }

    public function showNoticias()
    {
        return Controller::view('/admin/noticias/show');
    }

    public function showCategorias()
    {
        return Controller::view('/admin/categorias/show');
    }

    public function showUtilizadores()
    {
        return Controller::view('/admin/utilizadores/show');
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
