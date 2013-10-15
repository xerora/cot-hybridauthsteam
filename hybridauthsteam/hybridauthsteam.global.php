<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */

if(!empty($usr['profile']['user_steam_id']) && empty($usr['profile']['user_steamid']) && !empty($usr['profile']['user_steam_url']))
{
	if(preg_match('`^(https?://)?(www\.)?steamcommunity\.com/id/([^/]+)(/)?$`i', $usr['profile']['user_steam_url'], $hybridauthsteam_id_match))
	{
		if(!empty($hybridauthsteam_id_match[3]))
		{
			$db->update($db_users, array('user_steamid' => $hybridauthsteam_id_match[3]), "user_id=?", $usr['id']);
			$usr['profile']['user_steamid'] = $hybridauthsteam_id_match[3];
			require_once cot_incfile('steam', 'module');
			steam_sync_user($usr);
		}
	}
}