<?php

require_once 'defines.php';
require_once 'autoload-register.php';
require_once 'config-env-data.php';

TMPHP\App\Brain::init();

# including routes
require_once 'routes.php';
