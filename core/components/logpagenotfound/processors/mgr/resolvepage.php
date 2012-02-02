<?php
/**
 * LogPageNotFound getList processor script
 *
 * Copyright 2011 by Mike Schell <mike+logpagenotfound@modx.com> for MODX, LLC
 * LogPageNotFound Copyright 2011 Bob Ray <http://bobsguides.com>
 *
 * LogPageNotFound is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LogPageNotFound is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LogPageNotFound; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package logpagenotfound
 * @subpackage processors
 */
/**
 * LogPageNotFound Connector
 *
 * @package logpagenotfound
 * @subpackage processors
 */

$R = $modx->newObject('pageNotFoundResolved', array(
    'page'=> $this->properties['page'],
    'resolution_handler'=> 'default',
    'resolution_msg'=> $this->properties['resolution']
));
$R->save();

return $modx->error->success('',$R);
