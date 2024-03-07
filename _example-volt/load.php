<?php
	/* 	__________ ____ ___  ___________________.___  _________ ___ ___  
		\______   \    |   \/  _____/\_   _____/|   |/   _____//   |   \ 
		 |    |  _/    |   /   \  ___ |    __)  |   |\_____  \/    ~    \
		 |    |   \    |  /\    \_\  \|     \   |   |/        \    Y    /
		 |______  /______/  \______  /\___  /   |___/_______  /\___|_  / 
				\/                 \/     \/                \/       \/  	
							www.bugfish.eu
							
	    Bugfish Fast PHP Page Framework
		Copyright (C) 2024 Jan Maurice Dahlmanns [Bugfish]

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <https://www.gnu.org/licenses/>.
		
		// Initialize File will be loaded if site Mode is Active
	*/
	if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	switch(_HIVE_URL_CUR_[0]) {
		case false: case "":
			Header("Location: ./?"._HIVE_URL_GET_[0]."=general");
			break;
	}
	
	$notar = array();
	$notar[0]["text"] = "Text Entry";
	$notar[0]["time"] = "Time Entry";
	$notar[0]["object"] = "Object Entry";
	hive__volt_header($object, "Volt Theme", '<link rel="icon" type="image/x-icon" href="'._HIVE_URL_REL_.'/_core/_image/favicon.ico">', "dark");
	hive__volt_nav($object, "Volt Theme", array(hive_get_url_rel(array("create", false, false, false, false)), $object["lang"]->translate("nav_sub_button")));
	hive__volt_topbar($object, $pfm,  true, hive_get_url_rel(array("search", false, false, false, false)), $object["lang"]->translate("head_template"), _HIVE_URL_REL_."/_core/_image/user_image.png", $lang_ar, $notar);
	switch(_HIVE_URL_CUR_[0]) {
		case "general":
				require_once(_HIVE_PATH_."/_site/"._HIVE_MODE_."/general.php");
			break;
		case "create":
				require_once(_HIVE_PATH_."/_site/"._HIVE_MODE_."/create.php");
			break;
		case "buttons":
				require_once(_HIVE_PATH_."/_site/"._HIVE_MODE_."/buttons.php");
			break;
		case "profile":
				require_once(_HIVE_PATH_."/_site/"._HIVE_MODE_."/profile.php");
			break;
		case "charts":
				require_once(_HIVE_PATH_."/_site/"._HIVE_MODE_."/charts.php");
			break;	
		case "forms":
				require_once(_HIVE_PATH_."/_site/"._HIVE_MODE_."/forms.php");
			break;		
		case "tables":
				require_once(_HIVE_PATH_."/_site/"._HIVE_MODE_."/tables.php");
			break;	
		case "first_loc":
				if(_HIVE_URL_CUR_[1] == "login") { 
					require_once(_HIVE_PATH_."/_site/"._HIVE_MODE_."/login.php");
				} else {
					echo "<br />"; hive__volt_404($object, $object["lang"]->translate("404_text"), $object["lang"]->translate("404_title"));
				}
			break;				
		default:
				echo "<br />"; hive__volt_404($object, $object["lang"]->translate("404_text"), $object["lang"]->translate("404_title"));
	}
	$object["eventbox"]->show($object["lang"]->translate("g_evbclose"));
	x_cookieBanner(_HIVE_SITE_COOKIE_);
	hive__volt_downbar($object, "Click me", "This is another dynamic box!");
	hive__volt_footer($object, _HIVE_CREATOR_);
