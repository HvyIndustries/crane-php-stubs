<?php

// Start of ctype v.7.0.4-7ubuntu2

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for alphanumeric character(s)
 * @link http://php.net/manual/en/function.ctype-alnum.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i> is either
 * a letter or a digit, <b>FALSE</b> otherwise.
 */
function ctype_alnum(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for alphabetic character(s)
 * @link http://php.net/manual/en/function.ctype-alpha.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i> is
 * a letter from the current locale, <b>FALSE</b> otherwise.
 */
function ctype_alpha(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for control character(s)
 * @link http://php.net/manual/en/function.ctype-cntrl.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i> is
 * a control character from the current locale, <b>FALSE</b> otherwise.
 */
function ctype_cntrl(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for numeric character(s)
 * @link http://php.net/manual/en/function.ctype-digit.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in the string
 * <i>text</i> is a decimal digit, <b>FALSE</b> otherwise.
 */
function ctype_digit(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for lowercase character(s)
 * @link http://php.net/manual/en/function.ctype-lower.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i> is
 * a lowercase letter in the current locale.
 */
function ctype_lower(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for any printable character(s) except space
 * @link http://php.net/manual/en/function.ctype-graph.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i> is
 * printable and actually creates visible output (no white space), <b>FALSE</b>
 * otherwise.
 */
function ctype_graph(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for printable character(s)
 * @link http://php.net/manual/en/function.ctype-print.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i>
 * will actually create output (including blanks). Returns <b>FALSE</b> if
 * <i>text</i> contains control characters or characters
 * that do not have any output or control function at all.
 */
function ctype_print(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for any printable character which is not whitespace or an
alphanumeric character
 * @link http://php.net/manual/en/function.ctype-punct.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i>
 * is printable, but neither letter, digit or blank, <b>FALSE</b> otherwise.
 */
function ctype_punct(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for whitespace character(s)
 * @link http://php.net/manual/en/function.ctype-space.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i>
 * creates some sort of white space, <b>FALSE</b> otherwise. Besides the
 * blank character this also includes tab, vertical tab, line feed,
 * carriage return and form feed characters.
 */
function ctype_space(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for uppercase character(s)
 * @link http://php.net/manual/en/function.ctype-upper.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i> is
 * an uppercase letter in the current locale.
 */
function ctype_upper(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Check for character(s) representing a hexadecimal digit
 * @link http://php.net/manual/en/function.ctype-xdigit.php
 * @param string $text <p>
 * The tested string.
 * </p>
 * @return bool <b>TRUE</b> if every character in <i>text</i> is
 * a hexadecimal 'digit', that is a decimal digit or a character from
 * [A-Fa-f] , <b>FALSE</b> otherwise.
 */
function ctype_xdigit(string $text): bool {}

// End of ctype v.7.0.4-7ubuntu2
?>
