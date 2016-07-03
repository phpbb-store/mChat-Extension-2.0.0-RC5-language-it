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
	'MCHAT_PREFERENCES'				=> 'Preferenze mChat',
	'MCHAT_NO_SETTINGS'				=> 'Non sei autorizzato a personalizzare le impostazioni.',

	'MCHAT_INDEX'					=> 'Visualizza in home page',
	'MCHAT_SOUND'					=> 'Abilita suoni',
	'MCHAT_WHOIS_INDEX'				=> 'Visualizza <em>Chi sta chattando</em> sotto la chat',
	'MCHAT_STATS_INDEX'				=> 'Visualizza <em>Chi sta chattando</em> nelle statistiche',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Visualizza chi sta chattando sotto <em>chi è in linea</em> sull’home page.',
	'MCHAT_AVATARS'					=> 'Visualizza avatar',
	'MCHAT_CAPITAL_LETTER'			=> 'Prima lettera maiuscola nei tuoi messaggi',
	'MCHAT_CHAT_AREA'				=> 'Tipo di immissione',
	'MCHAT_INPUT_AREA'				=> 'campo di immissione',
	'MCHAT_TEXT_AREA'				=> 'Area di testo',
	'MCHAT_POSTS'					=> 'Visualizza nuovi post (Attualmente tutti disattivati, può essere attivato nella sezione Impostazioni globali Mchat nel PCA)',
	'MCHAT_CHARACTER_COUNT'			=> 'Visualizza numero di caratteri quando si digita un messaggio',
	'MCHAT_RELATIVE_TIME'			=> 'Visualizza data relativa ai nuovi messaggi',
	'MCHAT_RELATIVE_TIME_EXPLAIN'	=> 'Visualizza "proprio adesso", "1 minuto fa" e così via per ogni messaggio. Impostare <em>No</em> per visualizzare sempre la data completa.',
	'MCHAT_PAUSE_ON_INPUT'			=> 'Pausa su immissione',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'	=> 'Aggiornare mChat durante l’invio di un messaggio',
	'MCHAT_MESSAGE_TOP'				=> 'Dove visualizzare i nuovi messaggi della chat',
	'MCHAT_MESSAGE_TOP_EXPLAIN'		=> 'I nuovi messaggi appariranno in cima o in fondo nella chat.',
	'MCHAT_LOCATION'				=> 'Dove visualizzare la chat in home page',
	'MCHAT_BOTTOM'					=> 'Sotto',
	'MCHAT_TOP'						=> 'Sopra',

	'MCHAT_POSTS_TOPIC'				=> 'Visualizza nuovi argomenti',
	'MCHAT_POSTS_REPLY'				=> 'Visualizza nuove risposte',
	'MCHAT_POSTS_EDIT'				=> 'Visualizza messaggi modificati',
	'MCHAT_POSTS_QUOTE'				=> 'Visualizza messaggi citati',

	'MCHAT_DATE_FORMAT'				=> 'Formato data',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'La sintassi usata è identica a quella del PHP <a href="http://www.php.net/date">date()</a>.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Personalizza…',
));
