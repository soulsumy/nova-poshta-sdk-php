<?php

include_once 'Core/Autoload.php';

if (!defined('NOVA_POSHTA_PATH_SDK')) {
    define('NOVA_POSHTA_PATH_SDK', __DIR__ . '/');

    \NovaPoshta\Core\Autoload::init();
}