<?php
/**
 * LogPageNotFound Plugin
 *
 * Copyright 2011 Bob Ray <http://bobsguides.com>
 *
 * LogPageNotFound is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LogPageNotFound is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LogPageNotFound; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package logpagenotfound
 * @subpackage controllers
 */
/**
 * Loads the header for mgr pages.
 *
 * @package logpagenotfound
 * @subpackage controllers
 */
$modx->regClientCSS($logPageNotFound->config['cssUrl'].'mgr.css');
$modx->regClientStartupScript($logPageNotFound->config['jsUrl'].'mgr/logpagenotfound.js');
$modx->regClientStartupHTMLBlock('<script type="text/javascript">
Ext.onReady(function() {
    logPageNotFound.config = '.$modx->toJSON($logPageNotFound->config).';
    logPageNotFound.config.connector_url = "'.$logPageNotFound->config['connectorUrl'].'";
    logPageNotFound.action = "'.(!empty($_REQUEST['a']) ? $_REQUEST['a'] : 0).'";
});
</script>');

return '';