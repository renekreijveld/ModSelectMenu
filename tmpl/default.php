<?php

/**
 * @version 1.0.0 stable
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
?>

<form name="SelMenFrm">
<?php if($params->get('showLabel') == 1) echo $params->get('selectLabel')."&nbsp;"; ?>
<select name="SelMenSel" class="<?php echo $class_sfx;?>" onchange="javascript:location.href=document.SelMenFrm.SelMenSel.options[document.SelMenFrm.SelMenSel.selectedIndex].value;">
<option><?php echo $params->get('topText');?></option>
<?php
foreach ($list as $i => &$item) :

	// Determine if item shoud be set as selected
	$selected = "";
	if (($item->home == 0) && ($item->id == $active_id)) $selected = "selected=\"selected\"";
	// Set indent
	if ($item->level == 1) $indent = "";
	if ($item->level == 2) $indent = "&nbsp;-&nbsp;";
	if ($item->level == 3) $indent = "&nbsp;-&nbsp;&nbsp;-&nbsp;";
	if ($item->level == 4) $indent = "&nbsp;-&nbsp;&nbsp;-&nbsp;&nbsp;-&nbsp;";
	if ($item->level == 5) $indent = "&nbsp;-&nbsp;&nbsp;-&nbsp;&nbsp;-&nbsp;&nbsp;-&nbsp;";
	if ($item->level == 6) $indent = "&nbsp;-&nbsp;&nbsp;-&nbsp;&nbsp;-&nbsp;&nbsp;-&nbsp;&nbsp;-&nbsp;";

	echo "<option ".$selected."value=\"".$item->flink."\">".$indent.$item->title."</option>";

endforeach;
?>
</select></form>
