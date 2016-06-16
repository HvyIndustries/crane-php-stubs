<?php

// Start of recode v.7.0.4-7ubuntu2

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Recode a string according to a recode request
 * @link http://php.net/manual/en/function.recode-string.php
 * @param string $request <p>
 * The desired recode request type
 * </p>
 * @param string $string <p>
 * The string to be recoded
 * </p>
 * @return string the recoded string or <b>FALSE</b>, if unable to
 * perform the recode request.
 */
function recode_string(string $request, string $string): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Recode from file to file according to recode request
 * @link http://php.net/manual/en/function.recode-file.php
 * @param string $request <p>
 * The desired recode request type
 * </p>
 * @param resource $input <p>
 * A local file handle resource for
 * the <i>input</i>
 * </p>
 * @param resource $output <p>
 * A local file handle resource for
 * the <i>output</i>
 * </p>
 * @return bool <b>FALSE</b>, if unable to comply, <b>TRUE</b> otherwise.
 */
function recode_file(string $request, $input, $output): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Alias of <b>recode_string</b>
 * @link http://php.net/manual/en/function.recode.php
 * @param $request
 * @param $str
 */
function recode($request, $str) {}

// End of recode v.7.0.4-7ubuntu2
?>
