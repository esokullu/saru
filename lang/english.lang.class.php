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
 * @author	Emre Sokullu <esokullu@gmail.com>
 */

class English
{
	public $connection = "connection";
	public $username = "username";
	public $password = "password";

	/* meetings */
	public $meeting = "meeting";
	public $meetings = "Meetings";
	public $this_meeting = "this meeting";
	public $no_meeting = "no meeting";
	public $new_meeting = "new meeting";
	public $edit_meeting = "edit meeting";
	public $export_meeting = "export meeting";
	/* accounts */
	public $accounts = "accounts";
	public $account = "account";
	public $account_saved = "account saved";
	public $account_dont_exist = "account doesn't exist";
	public $this_account = "this account";
	public $account_switch_ok = "account change complete";
	public $must_select_account = "you must select an account";
	public $account_mod_not_activated = "Account module is inactive";
	public $before_export_contacts = "Before exporting contacts";
	public $edit_account = "edit account";
	public $no_account = "no account";
	public $work_with_account = "Work with this account";
	public $account_history = "account history";
	public $account_access = "account access";
	public $check_account = "check the corresponding box to give the account access privileges";
	public $account_inactive = "account inactive";
	public $select_account = "select an account";
	/* contacts */
	public $error_no_valid_contact = "You have not selected a valid contact. If the contact doesn't exist yet, you may want to create it first.";
	/* companies */
	/* alerts */
	/* misc messages */
	public $error_empty_field = "The field %s was empty.";


	public function __construct() {}

}

?>