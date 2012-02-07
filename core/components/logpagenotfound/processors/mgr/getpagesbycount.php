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
$isLimit = !empty($_REQUEST['limit']);
$start = $modx->getOption('start',$_REQUEST,0);
$limit = $modx->getOption('limit',$_REQUEST,20);
$sort = $modx->getOption('sort',$_REQUEST,'count');
$dir = $modx->getOption('dir',$_REQUEST,'DESC');
$query = $modx->getOption('query',$_REQUEST,'');
$notQuery = false;
preg_match("/^NOT\s?(.*)$/", $query, $queryMatches);
if(is_array($queryMatches) && count($queryMatches) == 2) {
    $notQuery = true;
    $query = $queryMatches[1];
}
$isQueryRegex = (!empty($query) && substr($query, 0, 1) == '/');

$list = array();

$colCount = $modx->escape('count');
$colPage = $modx->escape('page');
$colId = $modx->escape('id');
$colTime = $modx->escape('time');
$lpnfTableName = $modx->getTableName('pageNotFound');
$resolvedTableName = $modx->getTableName('pageNotFoundResolved');

if(!empty($query)) {
    if(!$isQueryRegex) {
        $searchFunction = $notQuery ? 'NOT LIKE' : 'LIKE';
        $query = "%{$query}%";
    } else {
        $searchFunction = $notQuery ? 'NOT REGEXP' : 'REGEXP';
        $query = preg_replace("/^\/(.*)\//", '$1', $query);
    }
    $whereSearch = " AND i.{$colPage} {$searchFunction} '{$query}'\n";
}

$subquery = <<<SUBQUERY
    SELECT COUNT(i.{$colId}) as $colCount, i.{$colPage}, MAX(i.{$colTime}) AS `lasthit`
        FROM $lpnfTableName AS i
        LEFT JOIN $resolvedTableName AS r
            ON i.{$colPage} = r.{$colPage}
        WHERE ISNULL(r.{$colPage})
{$whereSearch}
        GROUP BY i.{$colPage}

SUBQUERY;

$countQuery = <<<COUNTQUERY
    SELECT COUNT(sq.{$colCount}) FROM ($subquery) as sq;

COUNTQUERY;

$stmt = $modx->query($countQuery);
$count = $stmt->fetchColumn();

$sql = <<<REQUESTQUERY
    SELECT sq.{$colCount}, sq.{$colPage}, sq.`lasthit`
        FROM ($subquery) as sq
        ORDER BY $sort $dir
        LIMIT $limit OFFSET $start

REQUESTQUERY;

if(intval($count) > 0) {
    $handlers = array();
    $handlers[0] = array(
        'text' => $modx->lexicon('logpagenotfound.page_resolve'),
        'handler' => 'this.resolvePage',
    );
    $pluggedHandlers = $modx->invokeEvent('OnLog404RegisterHandler');
    foreach($pluggedHandlers as $handler) {
       $handlers[] = $modx->fromJSON($handler);
    }

    $stmt = $modx->query($sql);
    if ($stmt) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row['menu'] = array();
            $row['menu'] = $handlers;

            $list[]= $row;
        }
    }
}

return $this->outputArray($list,$count);
