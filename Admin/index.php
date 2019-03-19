<?php

require 'System/Config.php';

require CORE."Autoload.php";

use System\Core\Autoload;
use System\Core\App;

Autoload::run();

require 'App/Http/Route.php';

$url=$_GET["url"];

App::router($url);


?>