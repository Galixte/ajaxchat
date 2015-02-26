<?php

/**
*
* Ajax Chat extension for phpBB.
*
* @copyright (c) 2015 spaceace <http://www.livemembersonly.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
/**
 * DO NOT CHANGE
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge(
        $lang, array(
            'CHAT_ARCHIVE'         => 'Archive',
            'CHAT_ARCHIVE_EXPLAIN' => 'Archive Dialogue',
            'CHAT_POPUP'           => 'Popup',
            'CHAT_POPUP_EXPLAIN'   => 'Popup Dialogue',
            'CHAT_RULE'            => 'Régles Dialogue: ',
            'CHAT_RULE_EXPLAIN'    => 'Soyez polie, merci.',
            'EMPTY'                => 'Erreur: vous devez écrire un message.',
            'GUEST_MESSAGE'        => '<strong>Vous devez étre un Utilisateur Enregistré pour utiliser le Dialogue.</strong>',
            'MESSAGE'              => 'Message',
            'PAGE_TITLE'           => 'Boite dialogue du Forum',
            'RESPOND'              => 'Respondre à:',
            'UNIT'                 => 'Seconds',
            'UPDATES'              => 'Mis a jour',
            'CHAT'                 => 'Dialogue',
            'CHAT_EXPLAIN'         => 'Boite à Dialogue',
            'WHOIS_CHATTING'       => 'Qui Dialogue',
            'CHAT_FONT_COLOR'      => 'Couleur des lettres',
            'SELECT_COLOR'         => 'Coissir votre couleur',
            'CHAT_SUBMIT_MESSAGE'  => 'Envoyer un Message',
            'DELETE_CHAT_MESSAGE'  => 'Effacer un message',
            'BBCODES'              => 'BBCodes',
            'IE_NO_AJAX'           => 'Votre navigateur ne supporte pas AJAX.',
            'UPGRADE_BROWSER'      => 'Status: ne peut pas céer XmlHttpRequest Object.	Changer pour un navigateur plus moderne.',
            'NO_POST_IN_CHAT'      => 'Vous n avez pas les droits pour utiliser la boite de dialogue.',
            // @copyright line. No translations below this line
            'DETAILS'              => '<a href="http://www.livemembersonly.com" style="font-weight: bold;">AJAX Chat</a> &copy; 2015 <strong style="color: #AA0000;">Live Members Only</strong>',
        )
);
