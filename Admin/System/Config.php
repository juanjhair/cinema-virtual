
<?php

// URI VALUES
define('URI', $_SERVER['REQUEST_URI']);
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

//ROUTE VALUES
define('PATH_CONTROLLERS', 'App/Controller/');
define('PATH_VIEWS','App/View/');
define('CORE', 'System/Core/');

define('SUBFOLDER_PATH','Admin/');
define('FOLDER_PATH', 'cinema_virtual/'.SUBFOLDER_PATH);

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

define('FULL_PATH_VIEWS', FOLDER_PATH . 'App/View/');


//CONTROLLER DEFAULT
define('DEFAULT_CONTROLLER', 'Home');



?>