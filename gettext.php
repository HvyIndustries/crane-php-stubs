<?php

// Start of gettext v.7.0.4-7ubuntu2

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Sets the default domain
 * @link http://php.net/manual/en/function.textdomain.php
 * @param string $text_domain <p>
 * The new message domain, or <b>NULL</b> to get the current setting without
 * changing it
 * </p>
 * @return string If successful, this function returns the current message
 * domain, after possibly changing it.
 */
function textdomain(string $text_domain): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Lookup a message in the current domain
 * @link http://php.net/manual/en/function.gettext.php
 * @param string $message <p>
 * The message being translated.
 * </p>
 * @return string a translated string if one is found in the
 * translation table, or the submitted message if not found.
 */
function gettext(string $message): string {}

/**
 * @param $msgid
 */
function _($msgid) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Override the current domain
 * @link http://php.net/manual/en/function.dgettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $message <p>
 * The message
 * </p>
 * @return string A string on success.
 */
function dgettext(string $domain, string $message): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Overrides the domain for a single lookup
 * @link http://php.net/manual/en/function.dcgettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $message <p>
 * The message
 * </p>
 * @param int $category <p>
 * The category
 * </p>
 * @return string A string on success.
 */
function dcgettext(string $domain, string $message, int $category): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Sets the path for a domain
 * @link http://php.net/manual/en/function.bindtextdomain.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $directory <p>
 * The directory path
 * </p>
 * @return string The full pathname for the <i>domain</i> currently being set.
 */
function bindtextdomain(string $domain, string $directory): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Plural version of gettext
 * @link http://php.net/manual/en/function.ngettext.php
 * @param string $msgid1 <p>
 * The singular message ID.
 * </p>
 * @param string $msgid2 <p>
 * The plural message ID.
 * </p>
 * @param int $n <p>
 * The number (e.g. item count) to determine the translation for the
 * respective grammatical number.
 * </p>
 * @return string correct plural form of message identified by
 * <i>msgid1</i> and <i>msgid2</i>
 * for count <i>n</i>.
 */
function ngettext(string $msgid1, string $msgid2, int $n): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Plural version of dgettext
 * @link http://php.net/manual/en/function.dngettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string A string on success.
 */
function dngettext(string $domain, string $msgid1, string $msgid2, int $n): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Plural version of dcgettext
 * @link http://php.net/manual/en/function.dcngettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param int $category
 * @return string A string on success.
 */
function dcngettext(string $domain, string $msgid1, string $msgid2, int $n, int $category): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
 * @link http://php.net/manual/en/function.bind-textdomain-codeset.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $codeset <p>
 * The code set
 * </p>
 * @return string A string on success.
 */
function bind_textdomain_codeset(string $domain, string $codeset): string {}

// End of gettext v.7.0.4-7ubuntu2
?>
