<?php
/**
 * LogPageNotFound
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
 */
/**
 * Adds custom system events
 *
 * @package logpagenotfound
 * @subpackage build
 */
$events = array();

/* Register Handlers for Pages in the main CMP grid */
$events['OnLog404RegisterHandler']= $modx->newObject('modEvent');
$events['OnLog404RegisterHandler']->fromArray(array (
  'name' => 'OnLog404RegisterHandler',
  'service' => 1,
  'groupname' => 'LogPageNotFound',
), '', true, true);

/* Register Handlers for Pages in the main CMP grid */
$events['OnBeforeLog404CMPHandleRequest']= $modx->newObject('modEvent');
$events['OnBeforeLog404CMPHandleRequest']->fromArray(array (
  'name' => 'OnBeforeLog404CMPHandleRequest',
  'service' => 1,
  'groupname' => 'LogPageNotFound',
), '', true, true);

return $events;
