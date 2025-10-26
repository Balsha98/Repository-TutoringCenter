<?php

require_once __DIR__ . '/../../source/config.php';
require_once __DIR__ . '/../../source/autoload.php';

echo Api\Assets\Routing\Router::processRequest();
