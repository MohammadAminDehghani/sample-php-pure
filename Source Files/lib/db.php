<?php

global $db;
$db = new SQLite3(DB_NAME);

function migrations()
{
    global $db;

    $result = $db->query('
        CREATE TABLE IF NOT EXISTS users (
            id INTEGER  PRIMARY KEY AUTOINCREMENT,
            username TEXT NOT NULL,
            password TEXT NOT NULL,
            first_name TEXT,
            last_name TEXT
        )
    ');

    $db->query('
        CREATE TABLE IF NOT EXISTS options (
            id INTEGER  PRIMARY KEY AUTOINCREMENT,
            key TEXT NOT NULL,
            value TEXT
        )
    ');




}

//migrations();
//adminUser();