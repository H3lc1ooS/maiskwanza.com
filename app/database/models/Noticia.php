<?php

namespace app\database\models;

use app\database\Connection;

class Noticia
{
    public function fetch()
    {
        $connection = Connection::connect();
        dump($connection);
    }
}
