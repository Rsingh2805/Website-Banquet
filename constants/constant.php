<?php

define('HOME', __DIR__."/../");

define('PAGES', __DIR__."/../components/pages/");
define('INCLUDES', __DIR__."/../components/includes/");

define('CSS', __DIR__."/../assets/css/");
define('IMAGES', __DIR__."/../assets/images/");
define('JS', __DIR__."/../assets/js/");

define('HOME_R', "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."");

define('PAGES_R', "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."components/pages/");
define('INCLUDES_R', "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."components/includes/");

define('CSS_R', "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."assets/css/");
define('IMAGES_R', "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."assets/images/");
define('JS_R', "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."assets/js/");

?>