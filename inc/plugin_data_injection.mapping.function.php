<?php
/*
 * @version $Id: rules.constant.php 5351 2007-08-07 11:57:46Z walid $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2007 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 */

function getAllMappingsTypes()
{
	global $IMPORT_TYPES,$LANG;

	$types = array();
	
	foreach ($IMPORT_TYPES as $type)
	{
		switch ($type)
		{
			case COMPUTER_TYPE :
				$type_name = $LANG["help"][25];
			break;
			default :
				$type_name = "";	
		}
		$types[] = array($type,$type_name);
	}
	return $types;
}

function getAllMappingsByType($type)
{
	global $DATA_INJECTION_MAPPING,$LANG;
	$mapping_parameters = array();
	
	foreach ($DATA_INJECTION_MAPPING[$type] as $mapping)
	{
		$mapping_parameters[] = $mapping["name"];
	}

	return 	$mapping_parameters;
}
?>
