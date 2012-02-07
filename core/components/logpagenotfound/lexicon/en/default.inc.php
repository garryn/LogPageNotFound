<?php
/**
 * LogPageNotFound
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
 * LogPageNotFound; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package logpagenotfound
 */
/**
 * Default Lexicon Topic
 *
 * @package logpagenotfound
 * @subpackage lexicon
 */

// general strings for MODX manager
$_lang['logpagenotfound'] = 'LogPageNotFound';
$_lang['logpagenotfound.menu_desc'] = 'LogPageNotFound is a plugin for MODX Revolution that logs page-not-found requests';

// PageNotFound Manager Page - tabs
$_lang['logpagenotfound.items_by_count'] = 'Unresolved Pages by Count';
$_lang['logpagenotfound.items_by_count_desc'] = <<<DESCRIPTION
<p>A list of Pages Not Found which have not been logged as resolved. They are listed along with the running count of Not Found requests to the page.</p>
<p>Example search queries: <u>container1/</u> &nbsp;&nbsp;<u>NOT pagename</u> &nbsp;&nbsp;<u>/^regexp?/</u> &nbsp;&nbsp;<u>NOT /\.(gif|jpg|png)$/</u></p>

DESCRIPTION;

// PageNotFound Manager Page - column headers
$_lang['logpagenotfound.search...'] = 'Search...';

// PageNotFound Manager Page - column headers
$_lang['logpagenotfound.count'] = 'Count';
$_lang['logpagenotfound.page'] = 'Page';
$_lang['logpagenotfound.lasthit'] = 'Last hit';

// PageNotFound Manager Page - row context menu
$_lang['logpagenotfound.page_resolve'] = 'Resolve with optional note';

// PageNotFound Manager Page - default resolve window
$_lang['logpagenotfound.resolvewindow.intro'] = '<p>Resolve [[+page]] by pressing Save below. Adding a note is optional.</p>';
$_lang['logpagenotfound.resolvewindow.note'] = 'Note:';
