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
	'MCHAT_ADD'						=> 'Invia',
	'MCHAT_ARCHIVE'					=> 'Archivio',
	'MCHAT_ARCHIVE_PAGE'			=> 'mChat Archive',
	'MCHAT_BBCODES'					=> 'BBCodes',
	'MCHAT_CUSTOM_BBCODES'			=> 'BBCodes personalizzati',
	'MCHAT_DELCONFIRM'				=> 'Confermi la rimozione?',
	'MCHAT_EDIT'					=> 'Modifica',
	'MCHAT_EDITINFO'				=> 'Modifica il messaggio e clicca OK',
	'MCHAT_NEW_CHAT'				=> 'Nuovo messaggio in chat!',
	'MCHAT_SEND_PM'					=> 'Invia messaggio privato',
	'MCHAT_LIKE'					=> 'piace questo post',
	'MCHAT_LIKES'					=> 'piace questo post',
	'MCHAT_FLOOD'					=> 'Non puoi inviare un altro messaggio così presto dopo dall’ultimo',
	'MCHAT_FOE'						=> 'Questo messaggio è stato scritto da <strong>%1$s</strong> che è attualmente nella tua lista degli ignorati.',
	'MCHAT_RULES'					=> 'Regolamento',
	'MCHAT_WHOIS_USER'				=> 'IP whois di %1$s',
	'MCHAT_MESS_LONG'				=> 'Il tuo messaggio è troppo lungo. Si prega di ridurlo a %1$d caratteri',
	'MCHAT_NO_CUSTOM_PAGE'			=> 'La pagina personalizzata di mChat non è attivata in questo momento!',
	'MCHAT_NO_RULES'				=> 'La pagina del regolamento di mChat non è attivata in questo momento!',
	'MCHAT_NOACCESS'				=> 'Non hai i permessi per scrivere in chat',
	'MCHAT_NOACCESS_ARCHIVE'		=> 'Non hai i permessi per vedere l’archivio',
	'MCHAT_NOJAVASCRIPT'			=> 'Il tuo Browser non supporta JavaScript oppure JavaScript è disabilitato',
	'MCHAT_NOMESSAGE'				=> 'Nessun messaggio',
	'MCHAT_NOMESSAGEINPUT'			=> 'Non hai inserito un messaggio',
	'MCHAT_OK'						=> 'OK',
	'MCHAT_PAUSE'					=> 'Pausa',
	'MCHAT_PERMISSIONS'				=> 'Cambia permessi utente',
	'MCHAT_REFRESHING'				=> 'Aggiornamento…',
	'MCHAT_REFRESH_NO'				=> 'L’aggiornamento è disattivato',
	'MCHAT_REFRESH_YES'				=> 'Aggiorna ogni <strong>%1$d</strong> secondi',
	'MCHAT_RESPOND'					=> 'Rispondi all’utente',
	'MCHAT_SESSION_ENDS'			=> 'La sessione di Chat scadrà in %1$s',
	'MCHAT_SESSION_OUT'				=> 'La sessione di chat è scaduta',
	'MCHAT_SMILES'					=> 'Emoticons',
	'MCHAT_TOTALMESSAGES'			=> 'Totale messaggi: <strong>%1$d</strong>',
	'MCHAT_USESOUND'				=> 'Usa suoni',
	'MCHAT_COLLAPSE_TITLE'			=> 'visualizza nasconde mChat',
	'MCHAT_WHO_IS_REFRESH_EXPLAIN'	=> 'Aggiorna ogni <strong>%1$d</strong> secondi',
	'MCHAT_MINUTES_AGO'				=> array(
		0 => 'just now',
		1 => '%1$d minute ago',
		2 => '%1$d minutes ago',
	),

	// These messages are formatted with JavaScript, hence {} and no $d
	'MCHAT_CHARACTER_COUNT'			=> '<strong>{current}</strong> caratteri',
	'MCHAT_CHARACTER_COUNT_LIMIT'	=> '<strong>{current}</strong> superato {max} caratteri',
	'MCHAT_SESSION_ENDS_JS'			=> 'La sessione di Chat scadrà in {timeleft}',

	// Custom translations for administrators
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',
));
