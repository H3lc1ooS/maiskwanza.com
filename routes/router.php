<?php

function load(string $controller, string $action)
{
    try {
        // se controller existe
        $controllerNamespace = "app\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception(
                "O método {$action} não existe no controller {$controller}"
            );
        }

        $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$router = [
    "GET" => [
        "/" => fn () => load("PodcastController", "index"),
        "/sobre" => fn () => load("Homecontroller", "about"),
        "/podcasts" => fn () => load("PodcastController", "show"),
        "/noticias" => fn () => load("NewsController", "show"),
        // "/noticia&n={$id}" => fn () => load("NewsController", "show"),
        "/admin/home" => fn () => load("AdminController", "index"),
        "/admin/create/noticia" => fn () => load("AdminController", "createNoticia"),
        "/admin/create/categoria" => fn () => load("AdminController", "createCategoria"),
        "/admin/noticias" => fn () => load("AdminController", "showNoticias"),
        "/admin/categorias" => fn () => load("AdminController", "showCategorias"),
        "/admin/subscritos" => fn () => load("AdminController", "showUtilizadores"),
    ],

    "POST" => [
        "/contact" => fn () => load("ContactController", "store"),
        "/admin/noticias" => fn () => load("NewsController", "store"),
    ],
];
