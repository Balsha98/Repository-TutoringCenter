<?php

require_once __DIR__ . '/../source/config.php';
require_once __DIR__ . '/../source/autoload.php';

echo Source\Classes\Core\Routing\Router::renderView();
