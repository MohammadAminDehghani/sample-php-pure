<?php

const DB_NAME = 'simple-pure-php.db';

session_start();

const SITE_URL = 'http://localhost/sample-php-pure/Source%20Files/';

const SITE_PATH = __DIR__ . DIRECTORY_SEPARATOR;

const APP_NAME = 'simple pure php';

foreach (glob('lib/*.php') as $file){
    require_once $file;
}

