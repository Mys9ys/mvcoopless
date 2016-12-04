<?php

require_once __DIR__ . '/../classes/db.php';

class News {

    public $id;
    public $title;
    public $text;

    public static function getAll()
    {
        $db = new db;
        return $db->query('SELECT * FROM news', News);
    }
}