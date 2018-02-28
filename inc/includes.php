<?php
/**
 * SARU
 * organize your contacts
 *
 * Copyright (c) 2012-2018 Marie Kuntz - Lezard Rouge
 *
 * This file is part of SARU.
 * SARU is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * SARU is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.

 * You should have received a copy of the GNU Affero General Public License
 * along with SARU. If not, see <http://www.gnu.org/licenses/>.
 * See LICENSE.TXT file for more information.
 *
 * Saru is released under dual license, AGPL and commercial license.
 * If you need a commercial license or if you don't know which licence you need,
 * please contact us at <info@saru.fr>
 *
 */

/**
 * includes
 *
 * @since	1.0
 * @author	Marie Kuntz / Lézard Rouge <mariek@lezard-rouge.fr>
 */

/* constants */
require_once "constants.php";
require_once "config.php";
/* pdo */
require_once LOCAL_PATH . "classes/pdo.class.php";
/* utils */
require_once LOCAL_PATH . "classes/Utils.class.php";
/* languages */
require_once LOCAL_PATH . "lang/" . LANG . ".lang.class.php";
$lang_classname = ucfirst(LANG);
$lang = new $lang_classname();
/* sessions, permissions and access */
require_once LOCAL_PATH . "classes/Access.class.php";
require_once LOCAL_PATH . "classes/Session.class.php";
/* autoload */
spl_autoload_register('Utils::loadClass');
/* sessions */
if( ! IS_CLI) {
	try {
		$session = Session::getInstance();
	} catch (Exception $e) {
		echo $e;
		exit;
	}
}
date_default_timezone_set('Europe/Paris');
?>