<?php

/**
 * @version 1.0.3 stable
 * @package Select Menu
 * @copyright Copyright (C) 2012 ReneKreijveld.nl, All rights reserved.
 * @license http://www.gnu.org/licenses GNU/GPL
 * @author url: http://www.renekreijveld.nl
 * @author email email@renekreijveld.nl
 * @developer René Kreijveld
 *
 * Select Menu is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version. See <http://www.gnu.org/licenses/>.
 *
 * Select Menu is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list	= modSelectMenuHelper::getList($params);
$app	= JFactory::getApplication();
$menu	= $app->getMenu();
$active	= $menu->getActive();
$active_id = isset($active) ? $active->id : $menu->getDefault()->id;
$path	= isset($active) ? $active->tree : array();
$showAll	= $params->get('showAllChildren');
$class_sfx	= htmlspecialchars($params->get('class_sfx'));

//print_r($active_id.'<br>');
//print_r($list);die();

if(count($list)) {
	require JModuleHelper::getLayoutPath('mod_select_menu', $params->get('layout', 'default'));
}
