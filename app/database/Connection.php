<?php

namespace app\database;

use PDO;

class Connection
{
    private static ?PDO $connection = null;

    public static function connect(){
        if(!self::$connection){
            // self::$connection = new PDO("mysql:host=localhost;dbname=miniloja, root="');
        }
    }
}
