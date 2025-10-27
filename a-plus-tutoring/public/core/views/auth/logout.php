<?php

Source\Handlers\Helpers\Classes\Session::destroy();

Source\Handlers\Core\Routing\Router::redirectTo('login');
