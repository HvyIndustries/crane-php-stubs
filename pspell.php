<?php

// Start of pspell v.7.0.4-7ubuntu2

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Load a new dictionary
 * @link http://php.net/manual/en/function.pspell-new.php
 * @param string $language <p>
 * The language parameter is the language code which consists of the
 * two letter ISO 639 language code and an optional two letter ISO
 * 3166 country code after a dash or underscore.
 * </p>
 * @param string $spelling [optional] <p>
 * The spelling parameter is the requested spelling for languages
 * with more than one spelling such as English. Known values are
 * 'american', 'british', and 'canadian'.
 * </p>
 * @param string $jargon [optional] <p>
 * The jargon parameter contains extra information to distinguish
 * two different words lists that have the same language and
 * spelling parameters.
 * </p>
 * @param string $encoding [optional] <p>
 * The encoding parameter is the encoding that words are expected to
 * be in. Valid values are 'utf-8', 'iso8859-*', 'koi8-r',
 * 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32'. This parameter is largely untested, so be careful when
 * using.
 * </p>
 * @param int $mode [optional] <p>
 * The mode parameter is the mode in which spellchecker will work.
 * There are several modes available:
 * <b>PSPELL_FAST</b> - Fast mode (least number of
 * suggestions)
 * @return int the dictionary link identifier on success or <b>FALSE</b> on failure.
 */
function pspell_new(string $language, string $spelling = null, string $jargon = null, string $encoding = null, int $mode = 0): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Load a new dictionary with personal wordlist
 * @link http://php.net/manual/en/function.pspell-new-personal.php
 * @param string $personal <p>
 * The file where words added to the personal list will be stored.
 * It should be an absolute filename beginning with '/' because otherwise
 * it will be relative to $HOME, which is "/root" for most systems, and
 * is probably not what you want.
 * </p>
 * @param string $language <p>
 * The language code which consists of the two letter ISO 639 language
 * code and an optional two letter ISO 3166 country code after a dash
 * or underscore.
 * </p>
 * @param string $spelling [optional] <p>
 * The requested spelling for languages with more than one spelling such
 * as English. Known values are 'american', 'british', and 'canadian'.
 * </p>
 * @param string $jargon [optional] <p>
 * Extra information to distinguish two different words lists that have
 * the same language and spelling parameters.
 * </p>
 * @param string $encoding [optional] <p>
 * The encoding that words are expected to be in. Valid values are
 * utf-8, iso8859-*,
 * koi8-r, viscii,
 * cp1252, machine unsigned 16,
 * machine unsigned 32.
 * </p>
 * @param int $mode [optional] <p>
 * The mode in which spellchecker will work. There are several modes available:
 * <b>PSPELL_FAST</b> - Fast mode (least number of
 * suggestions)
 * @return int the dictionary link identifier for use in other pspell functions.
 */
function pspell_new_personal(string $personal, string $language, string $spelling = null, string $jargon = null, string $encoding = null, int $mode = 0): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Load a new dictionary with settings based on a given config
 * @link http://php.net/manual/en/function.pspell-new-config.php
 * @param int $config <p>
 * The <i>config</i> parameter is the one returned by
 * <b>pspell_config_create</b> when the config was created.
 * </p>
 * @return int a dictionary link identifier on success.
 */
function pspell_new_config(int $config): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Check a word
 * @link http://php.net/manual/en/function.pspell-check.php
 * @param int $dictionary_link
 * @param string $word <p>
 * The tested word.
 * </p>
 * @return bool <b>TRUE</b> if the spelling is correct, <b>FALSE</b> if not.
 */
function pspell_check(int $dictionary_link, string $word): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Suggest spellings of a word
 * @link http://php.net/manual/en/function.pspell-suggest.php
 * @param int $dictionary_link
 * @param string $word <p>
 * The tested word.
 * </p>
 * @return array an array of possible spellings.
 */
function pspell_suggest(int $dictionary_link, string $word): array {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Store a replacement pair for a word
 * @link http://php.net/manual/en/function.pspell-store-replacement.php
 * @param int $dictionary_link <p>
 * A dictionary link identifier, opened with
 * <b>pspell_new_personal</b>
 * </p>
 * @param string $misspelled <p>
 * The misspelled word.
 * </p>
 * @param string $correct <p>
 * The fixed spelling for the <i>misspelled</i> word.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_store_replacement(int $dictionary_link, string $misspelled, string $correct): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Add the word to a personal wordlist
 * @link http://php.net/manual/en/function.pspell-add-to-personal.php
 * @param int $dictionary_link
 * @param string $word <p>
 * The added word.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_add_to_personal(int $dictionary_link, string $word): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Add the word to the wordlist in the current session
 * @link http://php.net/manual/en/function.pspell-add-to-session.php
 * @param int $dictionary_link
 * @param string $word <p>
 * The added word.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_add_to_session(int $dictionary_link, string $word): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Clear the current session
 * @link http://php.net/manual/en/function.pspell-clear-session.php
 * @param int $dictionary_link
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_clear_session(int $dictionary_link): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Save the personal wordlist to a file
 * @link http://php.net/manual/en/function.pspell-save-wordlist.php
 * @param int $dictionary_link <p>
 * A dictionary link identifier opened with
 * <b>pspell_new_personal</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_save_wordlist(int $dictionary_link): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Create a config used to open a dictionary
 * @link http://php.net/manual/en/function.pspell-config-create.php
 * @param string $language <p>
 * The language parameter is the language code which consists of the
 * two letter ISO 639 language code and an optional two letter ISO
 * 3166 country code after a dash or underscore.
 * </p>
 * @param string $spelling [optional] <p>
 * The spelling parameter is the requested spelling for languages
 * with more than one spelling such as English. Known values are
 * 'american', 'british', and 'canadian'.
 * </p>
 * @param string $jargon [optional] <p>
 * The jargon parameter contains extra information to distinguish
 * two different words lists that have the same language and
 * spelling parameters.
 * </p>
 * @param string $encoding [optional] <p>
 * The encoding parameter is the encoding that words are expected to
 * be in. Valid values are 'utf-8', 'iso8859-*', 'koi8-r',
 * 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32'. This parameter is largely untested, so be careful when
 * using.
 * </p>
 * @return int Retuns a pspell config identifier, or <b>FALSE</b> on error.
 */
function pspell_config_create(string $language, string $spelling = null, string $jargon = null, string $encoding = null): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Consider run-together words as valid compounds
 * @link http://php.net/manual/en/function.pspell-config-runtogether.php
 * @param int $dictionary_link
 * @param bool $flag <p>
 * <b>TRUE</b> if run-together words should be treated as legal compounds,
 * <b>FALSE</b> otherwise.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_config_runtogether(int $dictionary_link, bool $flag): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Change the mode number of suggestions returned
 * @link http://php.net/manual/en/function.pspell-config-mode.php
 * @param int $dictionary_link
 * @param int $mode <p>
 * The mode parameter is the mode in which spellchecker will work.
 * There are several modes available:
 * <b>PSPELL_FAST</b> - Fast mode (least number of
 * suggestions)
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_config_mode(int $dictionary_link, int $mode): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Ignore words less than N characters long
 * @link http://php.net/manual/en/function.pspell-config-ignore.php
 * @param int $dictionary_link
 * @param int $n <p>
 * Words less than <i>n</i> characters will be skipped.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_config_ignore(int $dictionary_link, int $n): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Set a file that contains personal wordlist
 * @link http://php.net/manual/en/function.pspell-config-personal.php
 * @param int $dictionary_link
 * @param string $file <p>
 * The personal wordlist. If the file does not exist, it will be created.
 * The file should be writable by whoever PHP runs as (e.g. nobody).
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_config_personal(int $dictionary_link, string $file): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * Location of the main word list
 * @link http://php.net/manual/en/function.pspell-config-dict-dir.php
 * @param int $conf
 * @param string $directory
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_config_dict_dir(int $conf, string $directory): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * location of language data files
 * @link http://php.net/manual/en/function.pspell-config-data-dir.php
 * @param int $conf
 * @param string $directory
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_config_data_dir(int $conf, string $directory): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Set a file that contains replacement pairs
 * @link http://php.net/manual/en/function.pspell-config-repl.php
 * @param int $dictionary_link
 * @param string $file <p>
 * The file should be writable by whoever PHP runs as (e.g. nobody).
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_config_repl(int $dictionary_link, string $file): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * Determine whether to save a replacement pairs list
along with the wordlist
 * @link http://php.net/manual/en/function.pspell-config-save-repl.php
 * @param int $dictionary_link
 * @param bool $flag <p>
 * <b>TRUE</b> if replacement pairs should be saved, <b>FALSE</b> otherwise.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function pspell_config_save_repl(int $dictionary_link, bool $flag): bool {}

define ('PSPELL_FAST', 1);
define ('PSPELL_NORMAL', 2);
define ('PSPELL_BAD_SPELLERS', 3);
define ('PSPELL_RUN_TOGETHER', 8);

// End of pspell v.7.0.4-7ubuntu2
?>
