<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @Traduzione italiana By alex75 http://phpbb-store.it
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACL_U_MCHAT_USE'						=> 'può usare mChat',
	'ACL_U_MCHAT_VIEW'						=> 'può vedere mChat',
	'ACL_U_MCHAT_EDIT'						=> 'può modificare i messaggi',
	'ACL_U_MCHAT_DELETE'					=> 'può cancellare i messaggi',
	'ACL_U_MCHAT_IP'						=> 'può vedere indirizzi ip',
	'ACL_U_MCHAT_PM'						=> 'può usare i messaggi privati',
	'ACL_U_MCHAT_LIKE'						=> 'può inserire mi piace sui messaggi',
	'ACL_U_MCHAT_QUOTE'						=> 'può citara messaggi',
	'ACL_U_MCHAT_FLOOD_IGNORE'				=> 'può ignorare il limite di flood',
	'ACL_U_MCHAT_ARCHIVE'					=> 'può vedere l’archivio',
	'ACL_U_MCHAT_BBCODE'					=> 'può usare BBCodes',
	'ACL_U_MCHAT_SMILIES'					=> 'può usare le emoticons',
	'ACL_U_MCHAT_URLS'						=> 'può inviare URL',

	'ACL_U_MCHAT_AVATARS'					=> 'può personalizzare <em>vedere avatar</em>',
	'ACL_U_MCHAT_CAPITAL_LETTER'			=> 'può personalizzare <em>Prima lettera maiuscola</em>',
	'ACL_U_MCHAT_CHARACTER_COUNT'			=> 'può personalizzare <em>Visualizzare il numero di caratteri</em>',
	'ACL_U_MCHAT_DATE'						=> 'può personalizzare <em>formato data</em>',
	'ACL_U_MCHAT_INDEX'						=> 'può personalizzare <em>Visualizzazione sull’indice</em>',
	'ACL_U_MCHAT_INPUT_AREA'				=> 'può personalizzare <em>tipo di input</em>',
	'ACL_U_MCHAT_LOCATION'					=> 'può personalizzare <em>dove visualizzare mChat in home page</em>',
	'ACL_U_MCHAT_MESSAGE_TOP'				=> 'può personalizzare <em>dove visualizzare i nuovi messaggi della chat</em>',
	'ACL_U_MCHAT_PAUSE_ON_INPUT'			=> 'può personalizzare <em>Pausa durante la scrittura</em>',
	'ACL_U_MCHAT_POSTS'						=> 'può personalizzare <em>Visualizzare nuovo post</em>',
	'ACL_U_MCHAT_RELATIVE_TIME'				=> 'può personalizzare <em>Visualizzare il tempo relativo</em>',
	'ACL_U_MCHAT_SOUND'						=> 'può personalizzare <em>Usare i suoni</em>',
	'ACL_U_MCHAT_WHOIS_INDEX'				=> 'può personalizzare <em>visualizzare chi sta chattando sotto la chat</em>',
	'ACL_U_MCHAT_STATS_INDEX'				=> 'può personalizzare <em>Visualizzare chi sta chattando nelle statistiche</em>',

	'ACL_A_MCHAT'							=> 'Può gestire le impostazioni di MChat',
));
