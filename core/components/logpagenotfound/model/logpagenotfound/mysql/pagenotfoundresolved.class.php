<?php
/**
 * @package logpagenotfound
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/pagenotfoundresolved.class.php');
class pageNotFoundResolved_mysql extends pageNotFoundResolved {}
?>