<?php
$dir = realpath(dirname(__FILE__));

require_once $dir.'/header_landing.php';
require_once $dir.'/footer_landing.php';
echo $header.$content.$footer;
