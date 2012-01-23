<?php
/**
 * @package logpagenotfound
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/pagenotfound.class.php');
class pageNotFound_mysql extends pageNotFound {}
?>