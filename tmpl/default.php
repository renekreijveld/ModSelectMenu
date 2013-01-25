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

// No direct access.
defined('_JEXEC') or die;
$module_id = $module->id;
?>

<form name="SelMenFrm<?php echo $module_id;?>">
<?php if($params->get('showLabel') == 1) echo $params->get('selectLabel')."&nbsp;"; ?>
<select name="SelMenSel<?php echo $module_id;?>" class="<?php echo $class_sfx;?>" onchange="javascript:location.href=document.SelMenFrm<?php echo $module_id;?>.SelMenSel<?php echo $module_id;?>.options[document.SelMenFrm<?php echo $module_id;?>.SelMenSel<?php echo $module_id;?>.selectedIndex].value;">
<option><?php echo $params->get('topText');?></option>
<?php
foreach ($list as $i => &$item) :

	// Determine if item shoud be set as selected
	$selected = "";
	if (($item->home == 0) && ($item->id == $active_id)) $selected = "selected=\"selected\"";
	// Set indent
	$indent = str_repeat("&nbsp;",($item->level>=1?($item->level-1):0));

	echo "<option ".$selected."value=\"".$item->flink."\">".$indent.$item->title."</option>";

endforeach;
?>
</select></form>
