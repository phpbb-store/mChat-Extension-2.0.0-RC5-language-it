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
	// ACP Configuration sections
	'MCHAT_SETTINGS_INDEX'					=> 'Impostazione Home Page',
	'MCHAT_SETTINGS_CUSTOM'					=> 'Impostazioni pagina personalizzata',
	'MCHAT_SETTINGS_ARCHIVE'				=> 'Impostazioni archivio',
	'MCHAT_SETTINGS_POSTS'					=> 'Impostazioni nuovi messaggi',
	'MCHAT_SETTINGS_MESSAGES'				=> 'Impostazioni messaggio',
	'MCHAT_SETTINGS_PRUNE'					=> 'Impostazioni cancellazione automatica',
	'MCHAT_SETTINGS_STATS'					=> 'Impostazioni chi sta chattando',

	'MCHAT_GLOBALUSERSETTINGS_EXPLAIN'		=> 'Impostazioni per cui un utente <strong>non</strong> ha i permessi di personalizzazione; vengono applicate come configurato in basso.<br />Vai al <em>PCU mChat</em> scheda della sezione autorizzazioni utente per regolare i permessi di personalizzazione.<br />Vai alle <em>Preferenze</em> modulo <em>Gestione utenti</em> per visualizzare lo stato di impostazioni di ciascun utente.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE'			=> 'Sovrascrivi impostazioni per tutti gli utenti',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_EXPLAIN'	=> 'Applica le impostazioni come definiti sopra per <em>tutti</em> gli account utente.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_CONFIRM'	=> 'Conferma la sovrascrittura delle impostazioni Mchat per tutti gli utenti',

	'MCHAT_ACP_USER_PREFS_EXPLAIN'					=> 'Di seguito sono elencate tutte le preferenze di mChat per l’utente selezionato. Le Impostazioni per i quali l’utente selezionato non ha il permesso di personalizzare sono disabilitate. Queste impostazioni possono essere modificate in <em>Impostazioni globali utente</em> Mchat sezione di configurazione.',
	
	// ACP settings
	'MCHAT_ACP_GLOBALSETTINGS_TITLE'		=> 'Impostazioni globali mChat',
	'MCHAT_ACP_GLOBALUSERSETTINGS_TITLE'	=> 'Impostazioni utente mChat',
	'MCHAT_VERSION'							=> 'Versione',
	'MCHAT_RULES'							=> 'Regolamento',
	'MCHAT_RULES_EXPLAIN'					=> 'Inserisci le regole del forum qui. è consentito il codice HTML. <em>Limite di 255 caratteri.</em><br />Questo messaggio può essere tradotto: Modifica MCHAT_RULES_MESSAGE language in /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_CONFIG_SAVED'					=> 'Configurazione mChat aggiornata',
	'MCHAT_AVATARS'							=> 'Visualizza avatars',
	'MCHAT_AVATARS_EXPLAIN'					=> 'Se impostato su Si, verranno visualizzati gli avatar degli utenti ridimensionati',
	'MCHAT_INDEX'							=> 'Visualizza mChat in Home page',
	'MCHAT_INDEX_HEIGHT'					=> 'altezza della pagina Indice',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'			=> 'L’altezza della finestra della chat in pixel sulla pagina indice.<br /><em>minimo 50 massimo 1000. Default 250.</em>',
	'MCHAT_TOP_OF_FORUM'					=> 'In alto',
	'MCHAT_BOTTOM_OF_FORUM'					=> 'Sotto',
	'MCHAT_REFRESH'							=> 'Intervallo aggiornamento',
	'MCHAT_REFRESH_EXPLAIN'					=> 'Intervallo di secondi per aggiornare chat.<br /><em>Minimo 5 Massimo 60 secondi. Default 10 secondi.</em>',
	'MCHAT_LIVE_UPDATES'					=> 'aggiornamento in tempo reale dei messaggi modificati e cancellati',
	'MCHAT_LIVE_UPDATES_EXPLAIN'			=> 'Quando un utente modifica o cancella i messaggi, le modifiche vengono aggiornate in tempo reale per tutti gli altri, senza dover aggiornare la pagina. Disabilitare questa opzione se si verificassero problemi di prestazioni.',
	'MCHAT_PRUNE'							=> 'Abilita cancellazione automatica dei messaggi',
	'MCHAT_PRUNE_EXPLAIN'					=> 'Si verifica soltanto se un utente visualizza le pagine personalizzate o di archivio.',
	'MCHAT_PRUNE_NUM'						=> 'Numero di messaggi da mantenere dopo la cancellazione automatica',
	'MCHAT_NAVBAR_LINK'						=> 'Visualizza link alla pagina personalizzata sulla navbar',
	'MCHAT_MESSAGE_NUM_CUSTOM'				=> 'Numero iniziale di messaggi da visualizzare nella pagina personalizzata',
	'MCHAT_MESSAGE_NUM_CUSTOM_EXPLAIN'		=> '<em>Minimo 5 massimo 50. Default 10.</em>',
	'MCHAT_MESSAGE_NUM_INDEX'				=> 'Numero iniziale di messaggi da visualizzare nella home page',
	'MCHAT_MESSAGE_NUM_INDEX_EXPLAIN'		=> '<em>Minimo 5 massimo 50. Default 10.</em>',
	'MCHAT_MESSAGE_NUM_ARCHIVE'				=> 'Numero iniziale di messaggi da visualizzare nell’archivio',
	'MCHAT_MESSAGE_NUM_ARCHIVE_EXPLAIN'		=> 'Il numero massimo di messaggi da visualizzare per pagina nella pagina di archivio.<br /><em>Minimo 10 massimo 100. Default 25.</em>',
	'MCHAT_FLOOD_TIME'						=> 'Limite di Flood',
	'MCHAT_FLOOD_TIME_EXPLAIN'				=> 'Il numero di secondi che un utente deve attendere prima di inviare un altro messaggio nella chat.<br /><em>Minimo 5 massimo 60 secondi. Default 0. Imposta 0 per disabilitare.</em>',
	'MCHAT_EDIT_DELETE_LIMIT'				=> 'Tempo massimo per la modifica o l’eliminazione dei messaggi',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'		=> 'Messaggi più vecchi di un determinato numero di secondi non possono essere modificati o cancellati dall’autore.<br />Gli utenti che hanno <em> l’autorizzazione modifica/elimina. I moderatori sono esenti</em> da questo limite di tempo.<br />Imposta su 0 per annullare il limite di tempo.',
	'MCHAT_MAX_MESSAGE_LENGTH'				=> 'Lunghezza massima del messaggio',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'		=> 'Numero massimo di caratteri consentiti per ogni messaggio inviato.<br /><em>Minimo 0 massimo 1000. Default 500. Imposta su 0 per disabilitare.</em>',
	'MCHAT_CUSTOM_PAGE'						=> 'Abilita pagina personalizzata',
	'MCHAT_CUSTOM_PAGE_EXPLAIN'				=> 'Consente l’uso della pagina personalizzata',
	'MCHAT_CUSTOM_HEIGHT'					=> 'Altezza pagina personalizzata',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'			=> 'Altezza della casella di chat in pixel sulla pagina personalizzata.<br /><em>Minimo 50 massimo 1000. Default 350.</em>',
	'MCHAT_BBCODES_DISALLOWED'				=> 'Disabilita bbcodes',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'		=> 'Qui è possibile inserire i codici che possono <strong>non</strong> possono essere utilizzati nel messaggio.<br />BBCodes separati con una barra verticale, per esempio: <br />b|i|u|code|list|list=|flash|quote e/o un %1$scustom bbcode tag name%2$s',
	'MCHAT_STATIC_MESSAGE'					=> 'Messaggio statico',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'			=> 'Qui è possibile definire un messaggio statico da visualizzare agli utenti della chat. é consentito l’uso del codice HTML.<br />Lasciare vuoto per non visualizzare alcun messaggio <em>Massimo 255 caratteri.</em><br />Questo messaggio può essere tradotto: modifica MCHAT_STATIC_MESSAGE nel file di lingua /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_USER_TIMEOUT'					=> 'Timeout sessione utente',
	'MCHAT_USER_TIMEOUT_EXPLAIN'			=> 'Impostare il tempo massimo in secondi per scadenza della sessione utente in chat.<br />Imposta su 0 per nessuna scadenza. Attenzione, la sessione di lettura non scadrà mai!<br /><em>Attualmente la scadenza sessione %1$su configurazione server%2$s è impostata a %3$d secondi</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'			=> 'Annulla limite emoticons',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'	=> 'Imposta su Si per ignorare il limite di emoticons per i messaggi in chat',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'			=> 'Annulla limite minimo di caratteri',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'	=> 'Imposta su Si per ignorare il limite minimo di caratteri per i messaggi di chat',

	'MCHAT_WHOIS_REFRESH'					=> 'Intervallo aggiornamento Chi è in chat',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'			=> 'Numero di secondi per l’aggiornamento su Chi è in chat.<br /><em>Minimo 10 massimo 300 seconds. Default 60.</em>',
	'MCHAT_SOUND'							=> 'Riproduci suoni per i nuovi messaggi, messaggi modificati e messaggi cancellati',
	'MCHAT_PURGE'							=> 'Cancella tutti i messaggi adesso',
	'MCHAT_PURGE_CONFIRM'					=> 'Confermi la cancellazione di tutti i messaggi?',
	'MCHAT_PURGED'							=> 'Tutti i messaggi sono stati cancellati',

	// Error reporting
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'		=> 'Il valore BBCodes annullati è troppo lungo.',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'			=> 'Il valore di altezza personalizzata è troppo piccolo.',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'			=> 'Il valore di altezza personalizzata è troppo grande.',
	'TOO_LONG_MCHAT_DATE'					=> 'Il formato della data immesso è troppo lungo.',
	'TOO_SHORT_MCHAT_DATE'					=> 'Il formato della data immesso è troppo corto.',
	'TOO_SMALL_MCHAT_FLOOD_TIME'			=> 'Il valore del tempo di flood è troppo piccolo.',
	'TOO_LARGE_MCHAT_FLOOD_TIME'			=> 'Il valore del tempo di flood è troppo grande.',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'			=> 'Il valore dell’altezza indice è troppo piccolo.',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'			=> 'Il valore dell’altezza indice è troppo grande.',
	'TOO_SMALL_MCHAT_MAX_MESSAGE_LNGTH'		=> 'Il valore massimo per lunghezza del messaggio è troppo piccolo.',
	'TOO_LARGE_MCHAT_MAX_MESSAGE_LNGTH'		=> 'Il valore massimo per lunghezza del messaggio è troppo grande.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_CUSTOM'	=> 'Il numero di messaggi da visualizzare nella pagina personalizzata è troppo piccolo.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_CUSTOM'	=> 'Il numero di messaggi da visualizzare nella pagina personalizzata è troppo grande.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_INDEX'		=> 'Il numero di messaggi da visualizzare nella pagina di indice è troppo piccolo.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_INDEX'		=> 'Il numero di messaggi da visualizzare nella pagina di indice è troppo grande.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_ARCHIVE'	=> 'Il numero di messaggi da visualizzare nella pagina di archivio è troppo piccola.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_ARCHIVE'	=> 'Il numero di messaggi da visualizzare nella pagina di archivio è troppo grande.',
	'TOO_SMALL_MCHAT_REFRESH'				=> 'Il valore di aggiornamento è troppo piccolo.',
	'TOO_LARGE_MCHAT_REFRESH'				=> 'Il valore di aggiornamento è troppo grande.',
	'TOO_LONG_MCHAT_STATIC_MESSAGE'			=> 'Messaggio statico troppo lungo',
	'TOO_SMALL_MCHAT_TIMEOUT'				=> 'Valore timeout utente troppo piccolo',
	'TOO_LARGE_MCHAT_TIMEOUT'				=> 'Valore timeout utente troppo grande',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'			=> 'Valore del refresh whois troppo piccolo.',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'			=> 'Valore del refresh whois troppo grande',
));
